<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCertifications extends Model
{
    use HasFactory;
    protected $table = 'certifications';
    public $timestamps = true;
    protected $fillable = [
        'is_approved',
        'certification_id',
        'student_id'
     ];
}
