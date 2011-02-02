<?php
class AppController extends Controller
{
	var $components = array('Acl', 'Auth', 'Session');
	var $helpers = array('Html', 'Form', 'Session');
	
	//--------------------------------------------------------------------------
	
	function beforeFilter()
	{
		//Configure AuthComponent
		$this->Auth->authorize = 'actions';
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'departamentos', 'action' => 'add');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		$this->Auth->actionPath = 'controllers/';
		//$this->Auth->allowedActions = array('display');
	}
	
	//--------------------------------------------------------------------------
	
	function initDB()
	{
	 $group =& $this->User->Group;
    //Allow admins to everything
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');
 
    //allow Medicos Ocupacionales 
    $group->id = 2;	
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/HistoriasClinicas');
	 
	 //allow Fonoaudiologos
    $group->id = 4;	
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/ListaLlegadas');
	 $this->Acl->allow($group, 'controllers/Trabajadores');
    
 
    //allow users to only add and edit on posts and widgets
    //$group->id = 3;
    //$this->Acl->deny($group, 'controllers');        
    //$this->Acl->allow($group, 'controllers/Posts/add');
    //$this->Acl->allow($group, 'controllers/Posts/edit');        
    //$this->Acl->allow($group, 'controllers/Widgets/add');
    //$this->Acl->allow($group, 'controllers/Widgets/edit');
	 
    //we add an exit to avoid an ugly "missing views" error message
    echo "all done";
    exit;
	}
}
?>