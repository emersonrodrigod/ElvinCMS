<?php

namespace App\Repositories;

use App\Faq;

class Faqs
{
   /**
  	* Get data order by order (asc)
    *
 	*/
	public function all()
	{
		return Faq::orderBy('order','asc')->get();
	}
}