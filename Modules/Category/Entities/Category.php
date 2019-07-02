<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [];
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
}
