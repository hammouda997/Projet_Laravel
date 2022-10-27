<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matiere;

class Cour extends Model
{
    protected $table = 'cours';
    protected $primaryKey = 'id';
    protected $fillable = ['code', 'nom', 'duree','file','matiere_id'];
    use HasFactory;
    
 
    public function matieres()
    {
        return $this->belongsTo(Matiere::class,'matiere_id','id');
    }
}
