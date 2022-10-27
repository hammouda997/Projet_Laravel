<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etablissement;

class Stuff extends Model
{
    protected $table = 'stuffs';
    protected $primaryKey = 'id';
    protected $fillable = [ 'nom', 'prenom','cin','etablissement_id'];
    use HasFactory;
    public function etablissements()
    {
        return $this->belongsTo(Etablissement::class,'etablissement_id','id');
    }
   
}
