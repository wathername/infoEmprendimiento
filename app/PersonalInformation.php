<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'personal_informations';

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
    protected $fillable = ['type_id', 'identification', 'name', 'last_name', 'phone', 'origin_city_id', 'recidency_city_id', 'address', 'user_id', 'statu_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function origin_city()
    {
        return $this->belongsTo('App\City', 'origin_city_id');
    }

    public function recidency_city()
    {
        return $this->belongsTo('App\City', 'recidency_city_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Tipe');
    }


    public function statu()
    {
        return $this->belongsTo('App\Status' );
    }

    public function companydata()
    {
        return $this->hasOne('App\CompanyDatum' );
    }
}
