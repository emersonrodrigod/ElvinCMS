<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use App\GlobalScopes\LangScope;

class MenuItem extends Model {

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
    protected $table = 'menu_items';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['menu_id', 'lang', 'name', 'link', 'order'];

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
     * Disable Laravel's Eloquent timestamps
     *
     *
     * @var booleon
     */
    public $timestamps = false;
    

}