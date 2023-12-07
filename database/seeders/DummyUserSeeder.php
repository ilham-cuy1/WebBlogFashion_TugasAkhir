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
        $dataUsers = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Editor',
                'email' => 'editor@gmail.com',
                'role' => 'editor',
                'password' => bcrypt('editor123'),
            ],
        ];

        foreach($dataUsers as $key => $val){
            User::create($val);
        }
    }
}
