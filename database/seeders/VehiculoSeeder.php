<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

use function PHPUnit\Framework\isFalse;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculo::create([
            'Placa'=> 'AB742VJ',
            'Modelo'=> 2024,
            'PrecioVenta'=>78500.50,
            'Usado'=> false
        ]);

        Vehiculo::create([
            'Placa'=> 'U23KI59',
            'Modelo'=> 2014,
            'PrecioVenta'=>20678.99,
            'Usado'=> true
        ]);

        Vehiculo::create([
            'Placa'=> '6X89MC',
            'Modelo'=> 2020,
            'PrecioVenta'=>50438.10,
            'Usado'=> false
        ]);
    }
}
