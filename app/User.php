<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'statu_id', 'user', 'profession_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function profession()
    {
        return $this->belongsTo('App\Profession');
    }

    public function personalInformation()
    {
        return $this->hasOne('App\PersonalInformation');
    }

    public function academicdatum()
    {
        return $this->hasOne('App\AcademicDatum');
    }

    public function companydata()
    {
        return $this->hasOne('App\CompanyDatum');
    }
}
