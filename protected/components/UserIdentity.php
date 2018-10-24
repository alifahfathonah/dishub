<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = Pengguna::model()->findByAttributes( array( 'nama' => $this->username));
        $pass=md5($this->password);
		if ($user===null) { // No user was found!
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        } 
        // $user->Password refers to the "password" column name from the database
        else if($user->sandi !== $pass)
        {    
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
        else { // User/pass match 
			$this->setState('role',$user->tipepengguna_id);
			$this->setState('pengguna',$user->id);
			//$this->username=$user->tipepengguna_id;
			$this->errorCode=self::ERROR_NONE;
			
        }        
        return !$this->errorCode;
	}
}