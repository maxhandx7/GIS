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
        $user = User::create([
            'name' => 'Alan',
            'email' => 'alancarabali@gmail.com',
            'password' => bcrypt('17964290'),
        ]);

        $user->assignRole('admin');
    }
}
