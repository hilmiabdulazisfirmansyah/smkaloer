<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'verifyToken'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function siswa(){
        return $this->hasOne(Siswa::class);
    }
    public function ortu(){
        return $this->hasOne(Ortu::class);
    }

    public function guru(){
        return $this->hasOne(Guru::class);
    }

    public function alumni(){
        return $this->hasOne(Alumni::class);
    }

    public function jumlah_kehadiran(){
        return $this->hasOne(jumlah_kehadiran::class);
    }

    public function kehadiran_user(){
        return $this->hasOne(kehadiran_user::class);
    }

    public function kehadiran(){
        return $this->belongsToMany(Kehadiran::class);
    }

}
