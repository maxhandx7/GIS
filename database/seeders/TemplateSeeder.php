<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Template::insert([
            [
                'nombre' => 'Informe de Supervisión',
                'tipo_salida' => 'pdf,word',
                'activa' => true
            ],
            [
                'nombre' => 'Informe de Gestión',
                'tipo_salida' => 'pdf,word',
                'activa' => true
            ],
            [
                'nombre' => 'Documento Equivalente',
                'tipo_salida' => 'excel,pdf',
                'activa' => true
            ],
        ]);
    }
}
