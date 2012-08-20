<?php

class Create_Users_Table {

	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->string('website')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}