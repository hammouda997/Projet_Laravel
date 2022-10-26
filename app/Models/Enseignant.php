<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

    protected $fillable = ['enseignant_name', 'enseignant_email', 'enseignant_gender', 'enseignant_image'];
}

