<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatterAcademicDatum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matter_academic_datas';

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
    protected $fillable = ['academic_data_id', 'matter_id'];

    public function academic()
    {
        return $this->belongsToMany('App\AcademicDatum');
    }

    public function matter()
    {
        return $this->belongsTo('App\Matter');
    }
    
}
