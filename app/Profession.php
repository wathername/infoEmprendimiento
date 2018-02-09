<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'professions';

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
    protected $fillable = ['profession'];

    public function user()
	{
		return $this->hasMany('App\User');
	}
	
}
