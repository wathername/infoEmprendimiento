<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorDatum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tutor_datas';

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
    protected $fillable = ['personal_information_id', 'company_data_id', 'statu_id', 'email', 'user_id', 'matter_id'];

    
}
