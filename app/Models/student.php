<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\database\eloquent\attributes\fillable;

#[Fillable(['name', 'nim'])]
class student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory; 
}

    