<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperUsers extends Model
{
    use HasFactory;
    protected $table = 'super_users';
    public $timestamps = true;
    protected $fillable = [
        'login',
        'password',
        'first_name',
        'last_name',
        'deans_id'
       
    ];
}
