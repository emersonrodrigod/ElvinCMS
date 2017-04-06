<?php

namespace App\Repositories;

use App\Slide;

class Slides
{
  /**
  	* Get all with item details
    *
 	*/
	public function all()
	{
		return Slide::with('slide_items.slide_item_details')->get();
	}

   /**
   	* Get data which is marked as isVisible with item details
   	*
   	*/
	public function visible()
	{
		return Slide::with('slide_items.slide_item_details')
						->where('is_visible', 1)
						->get();
	}

}