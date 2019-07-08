<?php

namespace Modules\AuthHomepage\Entities;

use Illuminate\Database\Eloquent\Model;

class AuthHomeModel extends Model
{
    protected $fillable = [];
    protected $table = "user";
    protected $primaryKey = "id_user";
    public $timestamps = false;
}
