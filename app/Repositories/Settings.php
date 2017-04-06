<?php

namespace App\Repositories;

use App\Setting;

class Settings
{
  /**
   * get groups 
   *
   */
	public function findGroup($item)
	{
		return Setting::where('group', $item)->get();
	}

  /**
   * list index of the group  
   *
   */
	public function listIndex($item)
	{
		return Setting::where('group', $item)
						->pluck('index')->all();
	}

  /**
   * find index  
   *
   */
	public function findIndex($item)
	{
		return Setting::where('index', $item)->first();
	}
  
  /**
   * find location  
   *
   */
	public function findLocation()
	{
		return Setting::where('index', 'Location');
	}
  

}