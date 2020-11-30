<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerf_Type extends Model
{
    use HasFactory;
    protected $table = 'cerf__types';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'period_date'
    ];
    public function certification()
    {
        return $this->hasMany('App\Models\Certification');
    }
}
