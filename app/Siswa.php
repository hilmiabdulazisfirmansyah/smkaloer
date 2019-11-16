<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $guarded = ['_token', 'email', 'password'];

    public function siswa(){
		return $this->belongsTo(User::class);
	}
}
