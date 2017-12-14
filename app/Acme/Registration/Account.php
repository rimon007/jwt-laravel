<?php 

namespace App\Acme\Registration;

use App\User;

abstract class Account {
	protected $user;
	protected $request;

	public function __construct($request) {
		$this->request = $request;
	}

	protected function registerUser() {
		$data = [
			'email' => $this->request['email'],
			'password' => bcrypt($this->request['password']),
			'name' => $this->request['name'],
		];

		$this->user = User::create($data);

		$this->addRole();

		$this->createProfile();

		$this->fireEvent();

		return $this->user;
	}

	abstract protected function addRole();

	abstract protected function createProfile();

	abstract protected function fireEvent();
}

