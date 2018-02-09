<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicDatum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'academic_datas';

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
    protected $fillable = ['user_id', 'period_id', 'statu_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function period()
    {
        return $this->belongsTo('App\Period');
    }


    public function statu()
    {
        return $this->belongsTo('App\Status');
    }

    public function matteracademicdatum()
    {
        return $this->hasMany('App\MatterAcademicDatum', 'academic_data_id');
    }
}
