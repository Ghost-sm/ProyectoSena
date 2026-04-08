<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::insert([
            'nombre' => 'Empresa de Ejemplo',
            'propietario' => 'Santiago',
            'rut' => '1089674538',
            'porcentaje_impuesto' => '18',
            'abreviatura_impuesto' => 'IVA',
            'direccion' => 'Valle del Cauca',
            'moneda_id' => 1
        ]);
    }
}
