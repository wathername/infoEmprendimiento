<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matters';

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
    protected $fillable = ['matter'];

   
    public function matteracademicdatum()
    {
        return $this->hasMany('App\MatterAcademicDatum');
    }
}
