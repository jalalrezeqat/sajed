<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    protected $table ='abouts';

    protected $fillable = [
        'our_vision',
        'our_mission_titel',
        'our_mission_text',
        


    ];
}
