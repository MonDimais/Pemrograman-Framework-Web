<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'code' => 'SMB001',
                'name' => 'Beras Premium 5 Kg',
                'unit' => 'pcs',
                'price' => 75000,
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'code' => 'SMB002',
                'name' => 'Gula Pasir 1 Kg',
                'unit' => 'pcs',
                'price' => 18000,
                'stock' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'code' => 'SMB003',
                'name' => 'Minyak Goreng 1 Liter',
                'unit' => 'pcs',
                'price' => 17000,
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'code' => 'MNM001',
                'name' => 'Air Mineral 600 ml',
                'unit' => 'botol',
                'price' => 4000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'code' => 'MNM002',
                'name' => 'Teh Botol',
                'unit' => 'botol',
                'price' => 5000,
                'stock' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'code' => 'MNM003',
                'name' => 'Kopi Instan',
                'unit' => 'sachet',
                'price' => 2500,
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'code' => 'MSN001',
                'name' => 'Keripik Kentang',
                'unit' => 'bungkus',
                'price' => 10000,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'code' => 'MSN002',
                'name' => 'Biskuit Cokelat',
                'unit' => 'bungkus',
                'price' => 8500,
                'stock' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'code' => 'MSN003',
                'name' => 'Permen Mint',
                'unit' => 'bungkus',
                'price' => 6000,
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'code' => 'KRT001',
                'name' => 'Sabun Cuci Piring',
                'unit' => 'botol',
                'price' => 12000,
                'stock' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'code' => 'KRT002',
                'name' => 'Deterjen 800 Gram',
                'unit' => 'bungkus',
                'price' => 16000,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'code' => 'KRT003',
                'name' => 'Tisu Wajah',
                'unit' => 'pak',
                'price' => 11000,
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
