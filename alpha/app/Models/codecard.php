<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class codecard extends Model
{
    use HasFactory;
    protected $table ='codecards';

    protected $fillable = [
        'code',
        'courses',
        'startcode',
        'endcode'

    ];
}
