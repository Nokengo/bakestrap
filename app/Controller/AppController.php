<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
  
  public $isMobile = false;
  public $isTablet = false;

  public $components = array('Auth','Session','Error','Cookie','MobileDetect');
  public $uses = array('User');
  public $helpers = array('CakeStrap' => array('className' => 'CakeStrapHtml'),
                          'Form' => array('className' => 'CakeStrapForm'));


  public function beforeFilter()
  {
    if (isset($this->params['admin']))
        {
            $this->Auth->deny('*'); // pede login sempre que a rota for admin
        }
        else
        {
            $this->Auth->allow(); // permite todas as que não forem admin
        }

    # To enable portuguese language as main
    # Configure::write('Config.language', 'por');


	  if(Configure::read('Meta.title')){
		  $title = Configure::read('Meta.title');
		  Configure::write('Application.name', $title);
	  }

	  # App in maintenance
	  if(Configure::read('Application.maintenance')){
		  if($this->request->action != "maintenance"){
			  $this->redirect(array('controller' => 'pages', 'action' => 'maintenance'));
		  }
	  }
  }

  public function beforeRender() {
    
  /**
  * Verifica se a requisição é mobile, caso seja verifica se de celular ou tablet
  */
    if ($this->request->is('mobile')) {
        if (!$this->_isTablet()) {
            $this->isMobile = true;
        }
    }

  /**
   *  Se a requisição for mobile ou tablet e existir o(s) arquivo(s)
   *  da view e/ou layout para serem redenrizados
   */
    if (isset($this->isMobile) && $this->isMobile) {
      if (is_file(APP . 'View' . DS . 'Layouts' . DS . 'mobile' . DS . $this->layout . '.ctp')) {
        $this->layout = 'mobile/'. $this->layout;
      }
      if (is_file(APP . 'View' . DS . $this->name . DS . 'mobile' . DS . $this->action . '.ctp')) {
          $this->render('mobile/' . $this->action);
      } 
    }
    if (isset($this->isTablet) && $this->isTablet) {
      if (is_file(APP . 'View' . DS . 'Layouts' . DS . 'tablet' . DS . $this->layout . '.ctp')) {
          $this->layout = 'tablet/'. $this->layout;
      }
      if (is_file(APP . 'View' . DS . $this->name . DS . 'tablet' . DS . $this->action . '.ctp')) {
          $this->render('tablet/' . $this->action);
      } 
    }
    
    // Seta as variaveis para serem usadas na view
    $this->set(array(
      'base_url'  => Router::url('/',true),
      'is_tablet' => $this->isTablet,
      'is_mobile' => $this->isMobile));

    parent::beforeRender();

  }


  /**
  * Verifica se a requisição está vindo de um tablet
  * 
  */
  protected function _isTablet() 
  {
    
    if (!isset($this->MobileDetect)) {
      $this->MobileDetect = $this->Components->load('MobileDetect.MobileDetect');
    }
    $this->isTablet = $this->MobileDetect->detect('isTablet');
    return $this->isTablet;
  }


	/**
	 * Verifica uma vez se a conexao foi estabelecida
	 */
	protected function dbIsConnected()
	{
		App::uses('ConnectionManager', 'Model');
		if( !$this->Cookie->check('Verify.connected') ) {
			try {
				$db = ConnectionManager::getDataSource('default');
			}
			catch (MissingConnectionException $e) {
				$this->redirect('/install');
			}

			if (!$db->isConnected()) {
        $this->redirect('/install');
			}

			$this->Cookie->write('Verify.connected',true);
		}

	}
}


