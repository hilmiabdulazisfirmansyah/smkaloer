<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nik', 'user_id', 'nama'];

    public function guru(){
		return $this->belongsTo(User::class);

	}
}
