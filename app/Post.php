<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\GlobalScopes\LangScope;

class Post extends Model  {
 
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
    protected $table = 'posts';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lang' ,'title', 'slug', 'summary', 'text', 'image', 'slide_id', 'video', 'published_at'];

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
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];

    /*
    *  get the user associated with the given post
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     /**
     * Get the categories associated with the given post
     *
     * @return categories
     */ 
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'post_categories')
                    ->withTimestamps();
    }

    /**
     * Get the tags associated with the given post
     *
     * @return tags
     */ 
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tags')
                    ->withTimestamps();
    }

    /*
     *  get the slide associated with the given post
     */
     public function slide()
    {
        return $this->belongsTo('App\Slide');
    }

    /*
     * get the comments associated with the post
     */
    public function comments()
    {
        return $this->hasMany('App\Comment')->latest('created_at')->where('is_approved',1);
    }

    /* setPublishedAttribute
    *  use this function for showing published_at in Carbon method like created_at and updated_at 
    * set the format of the date
    */
    public function setPublishedAtAttribute($date)
    {
     $this->attributes['published_at'] = Carbon::createFromFormat('d.m.Y',$date);
   }
   /*
    * get the published_at attribute
    */
   public function getPublishedAtAttribute($date)
    {
     return Carbon::parse($date)->format('d.m.Y');
    }

    /*
    * published() function in order to show published posts till now
    */
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    /**
    * search() function, search titles of posts
    */
     public function scopeSearch($query,$search)
    {
        $query->where('title','LIKE',"%$search%")
              ->published();
    }

    /*
    * getAll() function , get all posts
    
    public function scopeGetAll($query)
    {
        $query->latest('published_at')
              ->published();
    }
    */
    /*
     * get a list of tag ids associated with the current post
     *
     * @return array
     */
     public function getTagListAttribute()
    {
        return $this->tags->pluck('id')->all();
    } 
  /*
   * get a list of category ids associated with the current post
   *
   *@return array
   */
    public function getCategoryListAttribute()
    {
        return $this->categories->pluck('id')->all();    
    }


}