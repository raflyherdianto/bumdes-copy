<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => Uuid::uuid4()->toString(),
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'nama' => 'Admin',
                'alamat' => 'Sumberpucung',
                'no_hp' => '081234567890',
                'tanggal_lahir' => '2000-08-05',
                'nik' => '1234200008050001',
                'jenis_kelamin' => 'Perempuan',
                'role' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'username' => 'royhan',
                'password' => bcrypt('bosskubabi'),
                'nama' => 'Royhan',
                'alamat' => 'Sumberpucung',
                'no_hp' => '081234567891',
                'tanggal_lahir' => '2000-08-05',
                'nik' => '1234200008050002',
                'jenis_kelamin' => 'Laki-laki',
                'role' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'username' => 'rafly',
                'password' => bcrypt('bosskubabi'),
                'nama' => 'Rafly',
                'alamat' => 'Sumberpucung',
                'no_hp' => '081234567892',
                'tanggal_lahir' => '2000-08-05',
                'nik' => '1234200008050003',
                'jenis_kelamin' => 'Laki-laki',
                'role' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => Uuid::uuid4()->toString(),
                'username' => 'dzikri',
                'password' => bcrypt('bosskubabi'),
                'nama' => 'Dzikri',
                'alamat' => 'Sumberpucung',
                'no_hp' => '081234567893',
                'tanggal_lahir' => '2000-08-05',
                'nik' => '1234200008050004',
                'jenis_kelamin' => 'Laki-laki',
                'role' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
