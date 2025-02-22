<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'robiatuladawiyah',
            'email'=> 'bismillah@gmail.com',
            'password' => \bcrypt('123')
        ];

        User::insert($user);
    }
}
