<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Setup extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('name');
			$table->rememberToken('remember_me');
			$table->timestamps();
		});

		Schema::create('profile', function($table)
		{
			$table->increments('id');
			$table->integer('profile_id')->unsigned()->unique('profile_id', 'profiles_user_id');
			$table->string('name')->unsigned();
			$table->string('email')->unsigned();
			$table->foreign('profile_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('name')->references('name')->on('users')->onDelete('cascade');
			$table->foreign('email')->references('email')->on('users')->onDelete('cascade');
			$table->string('location');
			$table->string('skype');
			$table->string('twitter');
			$table->string('github');
			$table->string('dribbble');
			$table->timestamps();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::drop('profile');
	}
}
