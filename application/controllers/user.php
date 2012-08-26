<?php

class User_Controller extends Base_Controller {

	public function action_index(){
		return View::make('home.login');

	}

	public function action_login(){
		//get data from forms
		$username = Input::get('username');
		$password = Input::get('password');

		//check username and password on database
		$users = DB::table('users')
		->where('username','=',$username)
		->where('password','=',$password)
		->get();

		if($users != NULL){
			return View::make('home.registered')
			->with('username', $username);
		}else {
			//TODO: put user in the registration page
			$errorMessage = "Sorry, you are not registered!";
			return View::make('home.login')
			->with('loginMessage',$errorMessage);
		}
	}

	public function action_registration(){
		return View::make('home.registration');
	}

	public function action_newregistration(){
		//save registration data
		$username = Input::get('username');
		$password = Input::get('password');
		$website  = Input::get('website');
		$email	  = Input::get('email');

		//need validation...but let pass tha first
		$id = DB::table('users')->insert_get_id(
			array(
				'username' => $username,
				'password' => $password,
				'email'	   => $email,
				'website'  => $website
			)
		);

		if($id == NULL){
			return View::make('home.registration');
		} else {
			$regMessagae = "Registration Success! Please Login";
			return View::make('home.login')
			->with('loginMessage',$regMessage);
		}
				
	}

	public function action_logout(){
		return View::make('home.index');
	}
}
?>