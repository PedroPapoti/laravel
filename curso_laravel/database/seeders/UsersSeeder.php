<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;

use function Laravel\Prompts\password;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Pedro',
            'lastName' => 'Papoti', 
            'email' => 'pedropapoti@gmail.com',
            'password' => bcrypt('12345678'),


        ]);
    }
}
