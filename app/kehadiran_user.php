<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kehadiran_user extends Model
{
    protected $table = 'kehadiran_user';

    public function kehadiran_user(){
		return $this->belongsTo(User::class);
	}

}
