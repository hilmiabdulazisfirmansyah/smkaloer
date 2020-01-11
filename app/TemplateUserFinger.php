<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateUserFinger extends Model
{
    protected $connection = 'fingerprint';
    protected $table = 'tb_template';
    protected $fillable = ['pin', 'finger_idx', 'alg_ver', 'template', 'created_at', 'updated_at'];
}
