<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
	protected $table = 'ortu';
	protected $guarded = ['_token', 'email', 'password'];


	public function ortu(){
		return $this->belongsTo(User::class);

	}
}