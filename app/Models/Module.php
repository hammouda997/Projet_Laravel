<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Examen;
class Module extends Model
{
    use HasFactory;
    protected $fillable = ['module_name', 'module_coef', 'module_durée'];
    public function examen()
    {
    	return $this->hasMany(Examen::class,'module_id','id');
    }
}