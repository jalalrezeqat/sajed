<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionscours extends Model
{
    use HasFactory;
    protected $table = 'questionscours';

    protected $fillable = [
        'question',
        'question_text',
        'summernote'


    ];
}
