<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;
class Enseignant extends Model
{
    use HasFactory;

    protected $fillable = ['enseignant_name', 'enseignant_email', 'classe', 'enseignant_image'];
    public function etudiant()
    {
    	return $this->hasMany(Etudiant::class,'enseignant_id','id');
    }
}

