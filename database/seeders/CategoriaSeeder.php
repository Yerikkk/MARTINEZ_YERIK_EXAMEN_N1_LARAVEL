<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Smartphones', 'descripcion' => 'Teléfonos móviles y accesorios relacionados.', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Laptops', 'descripcion' => 'Ordenadores portátiles y ultrabooks.', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Accesorios', 'descripcion' => 'Periféricos como teclados, ratones y audífonos.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}