<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'types';

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
    protected $fillable = ['type'];

    public function personalinfomration()
    {
        return $this->hasMany('App\PersonalInformation');
    }

    
}
