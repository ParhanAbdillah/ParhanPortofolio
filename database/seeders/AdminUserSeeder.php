<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@parhan.com'],
            [
                'name' => 'Parhan Admin',
                'password' => Hash::make('parhan280805'),
            ]
        );
    }
}
