<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenment;

class Club extends Model
{
    protected $table = 'clubs';
    protected $primaryKey = 'id';
    protected $fillable = ['nomClub', 'adresse', 'nbrpart'];
    use HasFactory;
    

    public function evenements(){
        return $this->hasMany(Evenment::class,'club_id','id');
    }

}
