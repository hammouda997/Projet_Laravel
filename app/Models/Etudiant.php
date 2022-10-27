<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enseignant;
class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = ['etudiant_name', 'etudiant_email', 'etudiant_gender', 'etudiant_image','enseignant_id'];
    public function enseignant()
    {
    	return $this->belongsTo(Enseignant::class,'enseignant_id','id');
    }
}
