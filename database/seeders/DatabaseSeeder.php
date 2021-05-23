<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ADMIN
        DB::table('users')->insert([
            'name' => 'Honey Pop',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'level' => '2',
        ]);
        //USER
        DB::table('users')->insert([
            'name' => 'Berry Pop',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        //DONATUR
        DB::table('donatur')->insert([
            'nama_donatur' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'no_telepon' => '089764567861',
            'jumlah_donasi' => '300000',
            'status' => 'Terverifikasi',
        ]);
        DB::table('donatur')->insert([
            'nama_donatur' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'no_telepon' => '0878978352412',
            'jumlah_donasi' => '3100000',
            'status' => 'Pending',
        ]);
        DB::table('donatur')->insert([
            'nama_donatur' => Str::random(5),
            'email' => Str::random(5).'@gmail.com',
            'no_telepon' => '0857145782145',
            'jumlah_donasi' => '20000',
            'status' => 'Gagal',
        ]);
    }
}
