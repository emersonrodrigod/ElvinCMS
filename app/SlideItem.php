<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class SlideItem extends Model {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slide_items';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['slide_id', 'image', 'order'];

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
     * Get details of item associated with the given slide item.
     *
     * @return items
     */
    public function slide_item_details()
    {
         return $this->hasMany('App\SlideItemDetail')->where('lang', Session::get('lang'));
    }

    public function slide()
    {
        return $this->belongsTo('App\Slide');
    }
}