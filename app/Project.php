<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GlobalScopes\LangScope;
use Carbon\Carbon;


class Project extends Model  {

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
    protected $table = 'projects';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lang', 'status', 'title', 'text', 'date'];

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
    protected $dates = ['date'];

    /* setDateAttribute
    *  use this function for showing date in Carbon method like created_at and updated_at 
    * set the format of the date
    */
    public function setDateAttribute($date)
    {
     $this->attributes['date'] = Carbon::createFromFormat('d.m.Y',$date);
   }
   /*
    * get the date attribute
    */
   public function getDateAttribute($date)
    {
     return Carbon::parse($date)->format('d.m.Y');
    }

}