<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;



class Slide extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slides';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'is_visible', 'is_erasable'];

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
    protected $dates = [];

    /**
     * Get items associated with the given slide.
     *
     * @return items
     */
    public function slide_items()
    {
        return $this->hasMany('App\SlideItem')->orderBy('order', 'ASC')->orderBy('id', 'DESC');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
}