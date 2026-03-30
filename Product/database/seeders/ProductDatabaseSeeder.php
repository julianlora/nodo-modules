<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->upsert([
            [
                'sku' => 'NODO-TSHIRT-001',
                'name' => 'Remera NODO',
                'description' => 'Remera de algodon peinado con estampa frontal.',
                'price' => 18990.00,
                'stock' => 25,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sku' => 'NODO-MUG-002',
                'name' => 'Taza Ceramica NODO',
                'description' => 'Taza de ceramica de 350 ml apta para microondas.',
                'price' => 8990.00,
                'stock' => 40,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sku' => 'NODO-NOTE-003',
                'name' => 'Cuaderno NODO',
                'description' => 'Cuaderno A5 con tapa dura y 80 hojas rayadas.',
                'price' => 12490.00,
                'stock' => 18,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ], ['sku'], ['name', 'description', 'price', 'stock', 'is_active', 'updated_at']);
    }
}