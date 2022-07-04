<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vols extends Model
{
    use HasFactory;
    public function reservation(){
        return $this->hasMany(reservation::class);
    }
    protected $fillable = array ('destination', 'code_vol', 'date_depart', 'heure_depart', 'nombre_classA', 'prix_classA', 'nombre_classB', 'prix_classB');
}
