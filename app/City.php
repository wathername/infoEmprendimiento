<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'state_id', 'city', 'capital'];


    public function personal()
    {
        return $this->hasMany('App\PersonalInformation', 'id');
    }

    public function personalinformation()
    {
        return $this->hasMany('App\PersonalInformation', 'id');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }
    
}
