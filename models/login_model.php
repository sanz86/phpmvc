<?php

class Login_Model extends Model {
	function __construct() {
		parent::__construct();
	}
	
	public function checkLogin($user) {
		
		$sth = $this->db->prepare("SELECT id from app_user where username = :username and password = MD5(:password)");
		
		$sth->execute(array(
				':username' => $user->username,
				':password' => $user->password
		));
		
		
		//$data = $sth->fetchAll();
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			Session::init();
			
			Session::set('loggedIn', true);
			Session::set('username', $user->username);
			return true;
		} else {
			return false;
		}
	}
	
	public function updatePassword($user) {
	
		$sth = $this->db->prepare("UPDATE app_user set password = MD5(:password) WHERE username = :username");
	
		$sth->execute(array(
				':username' => $user->username,
				':password' => $user->password
		));
	
	
		//$data = $sth->fetchAll();
	
		$count =  $sth->rowCount();
		if ($count > 0) {
			return true;
		} else {
			return false;
		}
	}
}