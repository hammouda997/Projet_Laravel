<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = ['etudiant_name', 'etudiant_email', 'etudiant_gender', 'etudiant_image'];
}
