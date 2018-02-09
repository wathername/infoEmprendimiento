<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status';

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
    protected $fillable = ['statu'];

    public function user()
	{
		return $this->hasMany('App\User');
	}

    public function personalinformation()
    {
        return $this->hasMany('App\PersonalInformation');
    }

    public function academicdatum()
    {
        return $this->hasMany('App\AcademicDatum');
    }
}
