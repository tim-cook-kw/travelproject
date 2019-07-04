<?php

namespace Modules\Satuan\Entities;

use Illuminate\Database\Eloquent\Model;

class modelsatuan extends Model
{
    protected $fillable = [];
    protected $table = "satuan";
    protected $primaryKey = "id_satuan";
    public $timestamps = false;
}
