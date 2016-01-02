<?php

class Login extends Controller {
	function __construct() {
		parent::__construct();
		//$this->checkLogin();
		Session::init();
	}
	
	function index() {
		$user = new User_Class();
		$user->username = isset($_POST['username'])?$_POST['username']:null;
		$user->password = isset($_POST['password'])?$_POST['password']:null;
		
		$this->model->checkLogin($user);
		header('location: '.URL.'booking');
	}
	
	function cp() {
		$user = new User_Class();
		$user->username = Session::get('username');
		$user->password = isset($_POST['password'])?$_POST['password']:null;
	
		$this->model->updatePassword($user);
		header('location: '.URL.'booking');
	}
	
}