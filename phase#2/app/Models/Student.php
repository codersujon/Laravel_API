<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasFactory, HasApiTokens;

    public $timestamps = false;
    public $fillable = [
        "name",
        "email",
        "password",
        "phone_number"
    ];
}
