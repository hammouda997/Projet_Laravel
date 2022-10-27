<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;
class Examen extends Model
{
    use HasFactory;
    protected $fillable = ['examen_name', 'examen_date', 'examen_durée', 'examen_coef','module_id'];
    public function module()
    {
        return $this->belongsTo(Module::class,'module_id','id');
    }
}
