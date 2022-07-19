<?php
class Err extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->view->render('err/template/header', true);
		$this->view->render('err/404', true);
	}

	function danger() {
		$this->view->render('err/template/header', true);
		$this->view->render('err/440', true);
	}

}