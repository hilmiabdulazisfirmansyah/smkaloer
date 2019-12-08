<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finger extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'tb_device';
}
