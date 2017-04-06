<?php

namespace App\Repositories;

use App\Event;

class Events
{
  /**
   * Get all data
   */
	public function all()
	{
		return Event::get();
	}

  /**
   * Get latest pages paginate 
   *
   */
	public function showLastSix()
	{
		return Event::oldest('date')->paginate(6);
	}

}