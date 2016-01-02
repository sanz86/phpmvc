<?php

class View {
	function __construct() {
		//echo 'This is View<br />';
	}
	
	public function render($name) {
		require 'views/'.$name.'.php';
	}
	
	public function renderWithSection($name,$section) {
		//require 'views/'.$name.'.php#'.$section;
		require 'views/'.$name.'.php';
	}
}