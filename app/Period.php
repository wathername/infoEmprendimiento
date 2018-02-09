<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'periods';

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
    protected $fillable = ['period'];

    public function type()
	{
		return $this->hasMany('App\AcademicData');
	}

    public function academicdatum()
    {
        return $this->hasMany('App\AcademicDatum');
    }
	
}
