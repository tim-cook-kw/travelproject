<?php

namespace Modules\Messages\Entities;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $fillable = [
        'id_pesan', 'id_customer', 'pesan',
    ];
}
