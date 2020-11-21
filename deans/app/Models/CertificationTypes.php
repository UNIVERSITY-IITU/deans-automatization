<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationTypes extends Model
{
    use HasFactory;
    protected $table = 'certification_types';
    public $primaryKey='certification_type_id';
    
    public $date = true;
    protected $fillable = [
        'name'
    ];
}
