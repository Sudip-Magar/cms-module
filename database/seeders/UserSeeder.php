<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role if it doesn't exist
        $role = Role::firstOrCreate(['name' => 'Admin']);

        // Create admin user
        $user = User::firstOrCreate(
            ['email' => 'admin@cms.com'],
            [
                'name' => 'admin',
                'password' => Hash::make('123456')
            ]
        );

        // Assign role
        if (!$user->hasRole('Admin')) {
            $user->assignRole('Admin');
        }
    }
}
