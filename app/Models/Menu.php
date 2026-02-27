<?php

namespace App\Models;
use App\Models\Platillos;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nombre'];
    public function platillos(){
        return $this->hasMany(Platillos::class);
    }
}
