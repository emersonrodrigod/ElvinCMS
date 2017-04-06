<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\GlobalScopes\LangScope;

class Category extends Model  {

  /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new LangScope);
    }

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'categories';

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['lang', 'parent_id', 'title', 'slug', 'is_visible', 'is_erasable', 'order'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
  protected $casts = ['is_visible' => 'boolean', 'is_erasable' => 'boolean'];

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = [];

  /**
   * Get posts associated with the given category.
   *
   * @return posts
   */
  public function posts()
  {
    return $this->belongsToMany('App\Post', 'post_categories');
  }

  /**
   * Get title 
   *
   */
  public function scopeGetTitle($query, $title) 
  {
    return $query->where('title', $title);
  }



}