<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'name',
        'birthday',
        'nationality_id',
        'stream_id',
        'speciality_id',
        'address_id',
        'study_id'
       
    ];
}
