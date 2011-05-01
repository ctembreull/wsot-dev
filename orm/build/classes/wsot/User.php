<?php




/**
 * Skeleton subclass for representing a row from the 'users' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.wsot
 */
class User extends BaseUser {
	
	public function authenticate($input_email, $input_password) {
		$u = UserQuery::create()->findOneByEmail($input_email);
		if ($u->getPassword() == User::encrypt_password($input_password)) {
			return true;
		}
	}

	public function encrypt_password($input_password) {
		global $salt;
		$enc_password = sha1($input_password . $salt);
		return $enc_password;
	}
} // User
