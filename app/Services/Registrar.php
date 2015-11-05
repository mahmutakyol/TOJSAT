<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */

	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:60',
            'surname' => 'required|max:60',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
            'title_id' => 'required',
            'country_id' => 'required',
            'organization' => 'required|max:255'
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
            'surname' => $data['surname'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
            'country_id' => $data['country_id'],
            'title_id' => $data['title_id'],
            'organization' => $data['organization']
		]);
	}

}
