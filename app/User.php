<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_karyawan',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan','id_karyawan');
    }

    public function panitia()
    {
        return $this->hasMany('App\Panitia','id_user');
    }

    public function gaji()
    {
        return $this->hasMany('App\Gaji','id_user');
    }

}
