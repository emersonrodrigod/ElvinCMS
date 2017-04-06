<?php

namespace App\Repositories;

use App\{Post,Slide,Category,Tag};
use Illuminate\Support\Facades\Lang;

class Posts
{
  /**
   * Get latest posts
   *
   */
	public function all()
	{
		return Post::latest('published_at')->published()->get();
	}

  /**
   * Get title and id as array
   *
   */	
	public function listCategories()
	{
		return Category::pluck('title', 'id');
	}

  /**
   * Get name and id as array
   *
   */
	public function listTags()
	{
		return Tag::pluck('name', 'id');
	}

  /**
   * Get title and id as array
   *
   */
	public function listSlides()
	{
		return Slide::pluck('title', 'id')->prepend(Lang::get('_.Select'), '0');
	}

  /**
   * Get latest posts paginate 
   *
   */
	public function showLastSix()
	{
		return Post::latest('published_at')->published()->paginate(6);
	}

  
}