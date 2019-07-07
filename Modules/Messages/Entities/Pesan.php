<?php

namespace Modules\Messages\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class pesan extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'pesans';
    // protected $guarded = [];
    protected $fillable = [
        'id_pesan', 'id_customer', 'pesan',
    ];
}
