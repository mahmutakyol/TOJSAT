<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('surname');
			$table->integer('title_id');
			$table->integer('role_id');
			$table->tinyInteger('is_admin');
            $table->text('user_address');
            $table->string('user_university');
            $table->string('user_country');
            $table->string('user_phone');
            $table->string('user_website');
            $table->dateTime('last_login');
            $table->string('login_ip');
            $table->string('pass_recover');
            $table->string('user_picture');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
			$table->string('email')->unique();
            $table->string('user_position');
            $table->mediumText('short_cv');
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
