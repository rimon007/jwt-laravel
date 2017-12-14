<?php 

namespace App\Acme\Registration;

use App\Acme\Registration\Account;

class UserAccountRegistration extends Account {
	public function completeRegistration() {

		\Log::info('Store User Registration');
		return $this->registerUser();
	}

	protected function addRole() {
		\Log::info('Add Role Registration');
		//return true;
	}

	protected function createProfile() {

		\Log::info('Create Profile  Registration - '. $this->user->id);
		// $profile = new UserProfile;
		// $this->user_id = $this->user->id;
		// $profile->save();
	}

	protected function fireEvent() {
		\Log::info('FIre Event Registration');
		//Send email varification code
		//
		//Fire an event for send Account activition code
	}
}