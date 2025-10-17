<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class ProductoSeeder extends Seeder
{

    public function run(): void
    {
        $smartphonesId = DB::table('categorias')->where('nombre', 'Smartphones')->value('id');
        $laptopsId = DB::table('categorias')->where('nombre', 'Laptops')->value('id');
        $accesoriosId = DB::table('categorias')->where('nombre', 'Accesorios')->value('id');

        DB::table('productos')->insert([
            [
                'nombre' => 'iPhone 15 Pro', 
                'descripcion' => 'Último modelo con chip A17 Bionic.', 
                'precio' => 1299.99, 
                'stock' => 50, 
                'categoria_id' => $smartphonesId,
                'codigo_barras' => 'SMT001',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombre' => 'Samsung Galaxy S24', 
                'descripcion' => 'Teléfono Android de alta gama.', 
                'precio' => 999.99, 
                'stock' => 30, 
                'categoria_id' => $smartphonesId,
                'codigo_barras' => 'SMT002',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombre' => 'MacBook Air M2', 
                'descripcion' => 'Portátil ultraligero y potente.', 
                'precio' => 1199.00, 
                'stock' => 15, 
                'categoria_id' => $laptopsId,
                'codigo_barras' => 'LAP001',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombre' => 'Dell XPS 13', 
                'descripcion' => 'Diseño premium y pantalla InfinityEdge.', 
                'precio' => 1450.50, 
                'stock' => 10, 
                'categoria_id' => $laptopsId,
                'codigo_barras' => 'LAP002',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombre' => 'AirPods Pro', 
                'descripcion' => 'Auriculares inalámbricos con cancelación de ruido.', 
                'precio' => 249.00, 
                'stock' => 80, 
                'categoria_id' => $accesoriosId,
                'codigo_barras' => 'ACC001',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombre' => 'Logitech MX Master 3', 
                'descripcion' => 'Ratón ergonómico de alta precisión.', 
                'precio' => 99.99, 
                'stock' => 45, 
                'categoria_id' => $accesoriosId,
                'codigo_barras' => 'ACC002',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombre' => 'Google Pixel 8', 
                'descripcion' => 'Cámara avanzada y AI de Google.', 
                'precio' => 750.00, 
                'stock' => 20, 
                'categoria_id' => $smartphonesId,
                'codigo_barras' => 'SMT003',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nombre' => 'Cargador USB-C 65W', 
                'descripcion' => 'Cargador rápido multipuerto.', 
                'precio' => 45.00, 
                'stock' => 5, 
                'categoria_id' => $accesoriosId,
                'codigo_barras' => 'ACC003',
                'activo' => true,
                'created_at' => now(), 'updated_at' => now()
            ],
        ]);
    }
}