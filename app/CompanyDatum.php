<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDatum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_datas';

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
    protected $fillable = ['email', 'web_side', 'economic_activity', 'personal_information_id', 'user_id', 'statu_id', 'matter_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function personalinformation()
    {
        return $this->belongsTo('App\PersonalInformation');
    }
}
