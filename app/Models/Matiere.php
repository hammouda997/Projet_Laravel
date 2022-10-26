<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cour;

class Matiere extends Model
{
    protected $table = 'matieres';
    protected $primaryKey = 'id';
    protected $fillable = ['codeM', 'nom', 'coff','evaluation'];
    use HasFactory;
    
    public function cours(){
        return $this->hasMany(Cour::class,'matiere_id','id');
    }
}
