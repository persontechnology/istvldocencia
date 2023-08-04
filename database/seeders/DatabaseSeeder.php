<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TipoCuenta;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::firstOrCreate(['name' => config('app.ROLE_ADMIN')]);
        Role::firstOrCreate(['name' => config('app.ROLE_DOCENTE')]);
        
        $user = User::firstOrCreate(
            ['name' => config('app.EMAIL_ADMIN')],
            [
                'email' => config('app.EMAIL_ADMIN'),
                'password' => Hash::make(config('app.PASSWORD_ADMIN'))
            ]
        );

        $user->syncRoles($role);
    }   
}
