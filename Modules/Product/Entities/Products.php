<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [];
    protected $table = 'product';
    protected $primaryKey = 'id_product';
}
