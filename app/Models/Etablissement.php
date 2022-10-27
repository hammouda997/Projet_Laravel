<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $table = 'etablissements';
    protected $primaryKey = 'id';
    protected $fillable = [ 'nom', 'adresse'];
    use HasFactory;
    
    public function stuffs(){
        return $this->hasMany(Stuff::class,'etablissement_id','id');
    }
}
