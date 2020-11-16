<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use HasFactory;
    protected $table = 'faqs';
    public $primaryKey='faq_id';
    public $timestamps = true;
    protected $fillable = [
        'question',
        'answer'
    ];
}
