<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Study extends Model
{
    use HasFactory;
    protected $table = 'type__studies';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'year'
    ];
}
