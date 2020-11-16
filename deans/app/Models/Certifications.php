<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certifications extends Model
{
    use HasFactory;
    protected $table = 'certifications';
    public $timestamps = true;
    protected $fillable = [
        'university_logo',
        'university_organization',
        'title',
        'paragraph',
        'main_part',
        'license',
        'exp_date',
        'certification_type_id'
     ];
}
