<?php
class AppController extends Controller
{
	var $components = array('Acl', 'Auth', 'Session');
	var $helpers = array('Html', 'Form', 'Session');
	
	//--------------------------------------------------------------------------
	
	function beforeFilter()
	{
		parent::beforeFilter(); 
		$this->Auth->allow(array('*'));
	
		//Configure AuthComponent
		/*$this->Auth->authorize = 'actions';
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'departamentos', 'action' => 'add');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		$this->Auth->actionPath = 'controllers/';
		$this->Auth->allowedActions = array('display');
		*/
	}
	
	//--------------------------------------------------------------------------
	
	/*function initDB()
	{
	 $group =& $this->User->Group;
    //Allow admins to everything
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');
 
    //allow Medicos Ocupacionales 
    $group->id = 2;	
    $this->Acl->deny($group, 'controllers');
	 $this->Acl->allow($group, 'controllers/Cie10');
    $this->Acl->allow($group, 'controllers/Hcos');
	 $this->Acl->allow($group, 'controllers/Paraclinicos');
	 $this->Acl->allow($group, 'controllers/Tiposriesgos');
	 $this->Acl->allow($group, 'controllers/Antecedentes');
	 $this->Acl->allow($group, 'controllers/Trabajadores');
	 $this->Acl->allow($group, 'controllers/Antecedenteslaborales');
	 $this->Acl->allow($group, 'controllers/Organossistemas');
	 $this->Acl->allow($group, 'controllers/Accidentestrabajos');
	 $this->Acl->allow($group, 'controllers/Empresas');
	 $this->Acl->allow($group, 'controllers/Riesgos');
	 $this->Acl->allow($group, 'controllers/Pruebasenfermedadesprofesionales');
	 $this->Acl->allow($group, 'controllers/Enfermedadesprofesionales');
	 $this->Acl->allow($group, 'controllers/Impresionesdiagnosticas');
	 $this->Acl->allow($group, 'controllers/Recomendaciones');
	 $this->Acl->allow($group, 'controllers/Religiones');
	 $this->Acl->allow($group, 'controllers/Examenesfisicos');
	 $this->Acl->allow($group, 'controllers/Riesgoscargoactuales');
	 $this->Acl->allow($group, 'controllers/Listallegadas');
	 $this->Acl->allow($group, 'controllers/Departamentos');
	 $this->Acl->allow($group, 'controllers/Ciudades');
	 $this->Acl->allow($group, 'controllers/Localidades');
	 
	 //allow Fonoaudiologos -> Proximamente: Rol de Listador (Lista de Llegada)
    $group->id = 4;	
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Listallegadas');
	 $this->Acl->allow($group, 'controllers/Trabajadores');
	 $this->Acl->allow($group, 'controllers/Empresas');
    
 
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
	*/
}
?>