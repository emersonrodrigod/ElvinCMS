<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryItemDetail extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gallery_item_details';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['gallery_id', 'lang', 'caption'];

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

}