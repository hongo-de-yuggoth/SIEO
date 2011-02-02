<?php
/* Antecedenteslaborales Test cases generated on: 2011-02-01 17:19:26 : 1296598766*/
App::import('Controller', 'Antecedenteslaborales');

class TestAntecedenteslaboralesController extends AntecedenteslaboralesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AntecedenteslaboralesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.antecedentelaboral');

	function startTest() {
		$this->Antecedenteslaborales =& new TestAntecedenteslaboralesController();
		$this->Antecedenteslaborales->constructClasses();
	}

	function endTest() {
		unset($this->Antecedenteslaborales);
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