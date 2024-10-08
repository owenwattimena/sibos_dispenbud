<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Owen Wattimena, S.Tr.T.I',
            'username' => 'wentoxwtt',
            'email' => 'wentoxwtt@gmail.com',
            'password' => Hash::make('*Wentoxwtt08071998'),
            'level' => 'super_admin'
        ]);
    }
}
