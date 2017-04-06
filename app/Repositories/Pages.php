<?php

namespace App\Repositories;

use App\Page;

class Pages
{
  /**
   * Get all data
   */
	public function all()
	{
		return Page::get();
	}

  /**
   * Get data which is marked as isVisible
   *
   */
	public function visible()
	{
		return Page::where('is_visible', 1)->get();
	}

  /**
   * Get latest pages paginate 
   *
   */
	public function showLastSix()
	{
		return Page::latest('created_at')->paginate(6);
	}

}