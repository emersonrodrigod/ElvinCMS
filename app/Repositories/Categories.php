<?php

namespace App\Repositories;

use App\Category;
use Illuminate\Support\Facades\Lang;

class Categories
{
  /**
   * Get data order by order (asc)
   *
   */
	public function all()
	{
		return Category::orderBy('order','asc')->get();
	}

  /**
   * Get data which is marked as isVisible
   *
   */
	public function visible()
	{
		return Category::where('is_visible', 1)->orderBy('order','asc')->get();
	}

  /**
   * Get data which is marked as isVisible an title,id as array
   *
   */
	public function visibleList()
	{
		return Category::where('is_visible', 1)
						->pluck('title', 'id')
                    	->prepend(Lang::get('cms_categories.Main Category'), 0);
	}

   /**
    * Get title and id as array
    *
    */	
	public function subItems($item)
	{
		return Category::where('parent_id', $item)->get();
	}

}