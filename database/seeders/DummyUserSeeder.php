<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Adik Siswa',
                'email'=>'siswa@gmail.com',
                'role'=>'siswa',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Ibu Guru',
                'email'=>'guru@gmail.com',
                'role'=>'guru',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Kakak Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
        ];
        
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
