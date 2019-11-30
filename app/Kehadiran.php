<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
	protected $table = 'kehadiran';

	public function kehadiran(){
		return $this->belongsTo(kehadiran_user::class);
	}

	public function user(){
		return $this->belongsToMany(User::class);
	}

}
