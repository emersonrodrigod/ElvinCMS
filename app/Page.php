<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GlobalScopes\LangScope;

class Page extends Model  {

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
    protected $table = 'pages';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lang', 'title', 'slug', 'summary', 'text', 'item', 'is_visible', 'is_erasable'];

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


}