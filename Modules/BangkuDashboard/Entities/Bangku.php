<?php

namespace Modules\BangkuDashboard\Entities;

use Illuminate\Database\Eloquent\Model;

class Bangku extends Model
{
    protected $fillable = ['nomor_bangku','id_product'];
    protected $table = 'bangku';
    public $timestamps = false;
}
