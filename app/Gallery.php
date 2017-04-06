<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model  {

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galleries';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'is_visible', 'is_erasable'];

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
     * Get images associated with the given gallery.
     *
     * @return images
     */
    public function items()
    {
         return $this->hasMany('App\GalleryItem')->orderBy('order', 'ASC')->orderBy('id', 'DESC');
    }

}