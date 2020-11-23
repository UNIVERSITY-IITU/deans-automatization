<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $table='certifications';
    public $timestamps = true;
    protected $fillable = [
        'uni_logo',
        'uni_organization',
        'title',
        'paragraph',
        'main_part',
        'license'
    ];
    public function cerf_type(){
        return $this->belongsTo('App\Model\Cerf_Type');
    }
}
