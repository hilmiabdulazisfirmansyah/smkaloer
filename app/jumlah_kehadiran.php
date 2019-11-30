<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah_kehadiran extends Model
{
    protected $table = 'jumlah_kehadiran';

    public function jumlah_kehadiran(){
		return $this->belongsTo(kehadiran_user::class);
	}
}
