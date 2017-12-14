<?php 

namespace App\Acme\Registration;

use App\Acme\Registration\Account;

class MemberAccountRegistration extends Account {

	public function completeRegistration() {

		\Log::info('Store User Member');
		return $this->registerUser();
	}

	protected function addRole() {
		\Log::info('Add Role Member');
		//return true;
	}

	protected function createProfile() {

		\Log::info('Create Profile  Member- '. $this->user->id);
		// $profile = new UserProfile;
		// $this->user_id = $this->user->id;
		// $profile->save();
	}

	protected function fireEvent() {
		\Log::info('FIre Event Member');
		//Send email varification code
		//
		//Fire an event for send Account activition code
	}
}