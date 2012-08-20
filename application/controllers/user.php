<?php

class User_Controller extends Base_Controller {

	public function action_index(){
		return View::make('home.login');

	}

	public function action_login(){
		return View::make('home.registered');
	}

	public function action_logout(){
		return View::make('home.index');
	}

}

?>