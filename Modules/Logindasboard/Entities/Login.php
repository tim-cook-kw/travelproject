<?php

namespace Modules\Logindasboard\Entities;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $fillable = ['email','password'];
    protected $table = 'user';
    public $timestamps = false;
}
