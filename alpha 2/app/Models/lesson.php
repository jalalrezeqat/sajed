<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;

    protected $table ='lessons';

    protected $fillable = [
        'name',
        'vedio',
        'chabters',
        'course'
        


    ];
}
