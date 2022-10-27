<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Club;

class Evenment extends Model
{
    protected $table = 'evenments';
    protected $primaryKey = 'id';
    protected $fillable = ['description', 'date_deb', 'duree','club_id'];
    use HasFactory;
    
    public function clubs()
    {
        return $this->belongsTo(Club::class,'club_id','id');
    }

}
