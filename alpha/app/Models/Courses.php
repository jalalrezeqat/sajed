<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $table ='courses';

    protected $fillable = [
        'name',
        'summary',
        'price',
        'branche',
        'teacher_name',
        'status',
        'img_name'


        


    ];
}
