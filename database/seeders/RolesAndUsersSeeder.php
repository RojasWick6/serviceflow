<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndUsersSeeder extends Seeder
{
    public function run(): void
    {
        // Limpia la caché de permisos
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Crear los 3 roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $supervisor = Role::firstOrCreate(['name' => 'supervisor']);
        $tecnico = Role::firstOrCreate(['name' => 'tecnico']);

        // Usuarios de prueba
        $u1 = User::firstOrCreate(
            ['email' => 'admin@serviceflow.test'],
            ['name' => 'Administrador', 'password' => Hash::make('password')]
        );
        $u1->assignRole($admin);

        $u2 = User::firstOrCreate(
            ['email' => 'supervisor@serviceflow.test'],
            ['name' => 'Supervisor', 'password' => Hash::make('password')]
        );
        $u2->assignRole($supervisor);

        $u3 = User::firstOrCreate(
            ['email' => 'tecnico@serviceflow.test'],
            ['name' => 'Técnico Demo', 'password' => Hash::make('password')]
        );
        $u3->assignRole($tecnico);
    }
}