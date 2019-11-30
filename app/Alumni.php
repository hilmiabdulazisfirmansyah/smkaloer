<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    protected $guarded = ['_token', 'email', 'password'];

    public function alumni(){
		return $this->belongsTo(User::class);

	}
}
