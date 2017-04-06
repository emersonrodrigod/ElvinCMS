<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;

class GalleryItem extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gallery_items';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['gallery_id', 'image', 'order'];

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
    public function details()
    {
         return $this->hasMany('App\GalleryItemDetail')->where('lang', Session::get('lang'));
    }
}