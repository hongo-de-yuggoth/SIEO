<?php
/* Departamentos Test cases generated on: 2011-02-01 17:20:17 : 1296598817*/
App::import('Controller', 'Departamentos');

class TestDepartamentosController extends DepartamentosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DepartamentosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.departamento');

	function startTest() {
		$this->Departamentos =& new TestDepartamentosController();
		$this->Departamentos->constructClasses();
	}

	function endTest() {
		unset($this->Departamentos);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>