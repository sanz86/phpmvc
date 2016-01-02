<?php

class Logout extends Controller {
	function __construct() {
		Session::init();
	}
	
	function index()
	{
		Session::destroy();
		header('location: booking');
	}
}