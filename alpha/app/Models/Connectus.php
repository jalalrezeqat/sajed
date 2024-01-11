<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connectus extends Model
{
    use HasFactory;

    protected $table ='Connectus';

    protected $fillable = [
        'firestname',
        'lastname',
        'email',
        'phone',
        'note',


    ];
}
