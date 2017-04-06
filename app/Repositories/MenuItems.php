<?php

namespace App\Repositories;

use App\{MenuItem,Page,Post,Category};
use Illuminate\Support\Facades\Lang;

class MenuItems
{
  /**
   * Get data order by order (asc)
   *
   */
	public function all()
	{
		return MenuItem::orderBy('order','asc')->get();
	}

   /**
    * Get title and id as array
    *
    */	
	public function subItems($item)
	{
		return MenuItem::where('parent_id', $item)->get();
	}

   /** 
    * search posts by title
    */

	public function searchPosts($item)
	{
		return Post::where('title', 'LIKE', '%'.$item.'%')->get();
	}

	/** 
    * search pages by title
    */

	public function searchPages($item)
	{
		return Page::where('title', 'LIKE', '%'.$item.'%')->get();
	}

	/** 
    * search categories by title
    */

	public function searchCategories($item)
	{
		return Category::where('title', 'LIKE', '%'.$item.'%')->get();
	}

}