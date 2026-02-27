<?php

namespace App\Models;
use App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class Platillos extends Model
{
    protected $fillable = ['nombre', 'calorias', 'disponible', 'menu_id'];
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
