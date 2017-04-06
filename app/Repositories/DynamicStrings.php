<?php

namespace App\Repositories;

use App\Dynamic_string;

class DynamicStrings
{
  /**
   * Get data 
   *
   */
	public function all()
	{
		return Dynamic_string::get();
	}
  /**
   * filter index for $item
   *
   */
	public function findIndex($item)
	{
		return Dynamic_string::where('index', $item)->first();
	}

  /**
   * list index as array
   *
   */
	public function listIndex()
	{
		return Dynamic_string::pluck('index')->all();
	}
}