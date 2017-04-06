<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GlobalScopes\LangScope;


class Faq extends Model  {

    
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
    protected $table = 'faqs';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lang', 'question', 'answer', 'order'];

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