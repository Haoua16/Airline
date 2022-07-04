<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    
    public function vols(){
        return $this->belongsTo(vols::class);
    }
    protected $fillable = array ('nom', 'prenom', 'sexe', 'class', 'vols_id');
}
