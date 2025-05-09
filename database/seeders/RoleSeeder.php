<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Crear roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);
        
        // Crear permisos
        Permission::firstOrCreate(['name' => 'manage users']);
        Permission::firstOrCreate(['name' => 'manage judges']);
        Permission::firstOrCreate(['name' => 'view votes']);
        
        // Asignar permisos a roles
        $adminRole->givePermissionTo(['manage users', 'manage judges', 'view votes']);
        $userRole->givePermissionTo('view votes');
        
        // Crear usuario admin
        $admin = User::firstOrCreate([
            'name' => 'Administrador',
            'email' => 'admin@misjueces.mx',
            'password' => bcrypt('password'),
        ]);
        
        $admin->assignRole('admin');
    }
}
