<?php

namespace App\Repositories;

use App\Gallery;

class Galleries
{
   /**
  	* Get all with item details
    *
 	*/
	public function all()
	{
		return Gallery::with('items.details')->get();
	}

   /**
   	* Get data which is marked as isVisible with item details
   	*
   	*/
	public function visible()
	{
		return Gallery::with('items.details')
						->where('is_visible', 1)
						->get();
	}
}