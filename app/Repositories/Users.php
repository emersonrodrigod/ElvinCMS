<?php

namespace App\Repositories;

use App\User;
use App\Role;

class Users
{
  /**
  	* Get all 
    *
 	*/
	public function all()
	{
		return User::get();
	}

   /**
   	* Get data which is marked as isVisible 
   	*
   	*/
	public function visible()
	{
		return User::where('is_visible', 1)->get();
	}

	/**
   * Get name and id as array
   *
   */
	public function listRoles()
	{
		return Role::pluck('display_name', 'id');
	}

}