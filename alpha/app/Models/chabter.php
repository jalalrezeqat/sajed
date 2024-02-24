<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chabter extends Model
{
    use HasFactory;
    protected $table ='chabters';

    protected $fillable = [
        'name',
        'course',
      


    ];
}
