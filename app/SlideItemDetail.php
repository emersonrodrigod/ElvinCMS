<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideItemDetail extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slide_item_details';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['slide_id', 'lang', 'caption', 'link'];

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

     public function slide_item()
    {
        return $this->belongsTo('App\SlideItem');
    }

}