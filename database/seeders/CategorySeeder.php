<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Produk Pertanian & Perkebunan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Peternakan & Hasil Olahan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Perikanan & Hasil Olahan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Kerajinan Tangan & Souvenir',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Makanan & Minuman Olahan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Pakaian & Aksesoris',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Jasa Wisata & Penginapan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Jasa Kuliner & Catering',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Jasa Kreatif & Digital',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'nama_kategori' => 'Produk & Jasa Lainnya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
