<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finger extends Model
{
    protected $connection = 'fingerprint';
    protected $table = 'tb_device';
}
