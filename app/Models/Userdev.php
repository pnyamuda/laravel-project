<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdev extends Model
{
    use HasFactory;
    protected $table = "users_dev";
    public $timestamps = false;
}