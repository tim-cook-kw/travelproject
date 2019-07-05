<?php

namespace Modules\Messages\Entities;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class pesan extends Eloquent
{
    private $connection = 'mongodb';
    protected $fillable = [
        'id_pesan', 'id_customer', 'pesan',
    ];
}
