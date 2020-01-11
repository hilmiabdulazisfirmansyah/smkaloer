<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFinger extends Model
{
	protected $connection = 'fingerprint';
    protected $table = 'tb_user';
    protected $fillable = ['pin', 'nama', 'pwd', 'rfid', 'privilege', 'created_at', 'updated_at'];
}
