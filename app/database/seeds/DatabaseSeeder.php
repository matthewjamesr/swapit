<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		DB::table('users')->delete();
		DB::table('profile')->delete();
		User::create(array('email' => 'foo@bar.com', 'name' => 'Foo Bar'));
		User::create(array('email' => 'bar@foo.com', 'name' => 'Bar Foo'));
		User::create(array('email' => 'me@matthewreichardt.com', 'name' => 'Matthew Reichardt'));
		Profile::create(array('profile_id' => '1', "name" => 'Foo Bar', 'email' => 'foo@bar.com', 'location' => 'Springfield, IL', 'skype' => 'matthewjames12', 'twitter' => 'matthewjamesr', 'github' => 'matthewjamesr', 'dribbble' => '#'));
		Profile::create(array('profile_id' => '2', "name" => 'Bar Foo', 'email' => 'bar@foo.com', 'location' => 'Springfield, IL', 'skype' => 'matthewjames12', 'twitter' => 'matthewjamesr', 'github' => 'matthewjamesr', 'dribbble' => '#'));
		Profile::create(array('profile_id' => '3', "name" => 'Matthew Reichardt', 'email' => 'me@matthewreichardt.com', 'location' => 'Springfield, IL', 'skype' => 'matthewjames12', 'twitter' => 'matthewjamesr', 'github' => 'matthewjamesr', 'dribbble' => '#'));
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(array('email' => 'foo@bar.com', 'name' => 'Foo Bar'));
		User::create(array('email' => 'bar@foo.com', 'name' => 'Bar Foo'));
		User::create(array('email' => 'me@matthewreichardt.com', 'name' => 'Matthew Reichardt'));
	}

}
