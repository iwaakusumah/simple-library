<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Admin', 'email' => 'admin@example.com', 'password' => Hash::make('password')],
            ['name' => 'Super Admin', 'email' => 'superadmin@example.com', 'password' => Hash::make('password')],
        ];

        foreach ($data as $item) {
            $user = User::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => $item['password'],
                'email_verified_at' => Carbon::now(),
            ]);
        }
    }
}
