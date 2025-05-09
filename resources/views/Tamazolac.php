Tamazolac 

Tultitlán 
       Toltitlan 
            Entre los tules
                  Tamazolac 
                      Lugar de sapos
Un collar de verdes cerros te circunda:
El Xoloc , el Cuauhtepetl, el Otontepetl  
y demás glaucas cumbres.
Hacen niebla de nubes
en las alturas los tlaloque.
Canta el coyote y suena la sonaja el cascabel.
Danza de aves rapaces sobre un lienzo azul.
Águila, tecolote y alcon
señores del aire, dueños del viento.
    Tamazolac 
          Lugar de sapos.
Venas y ojos de agua te nutren
con la sagrada llegada de las lluvias te nutres. 
Todos es verdor, floración, color y canción
Es Atonal quien se enerva y eleva el canto
cantos floridos canta el tolteca.
Cantos floridos canta el tepaneca. 
Y cantos tristes elevo yo, entre los tules.
       Tamazolac 
           Lugar de sapos
               Hogar de mis sueños 
                 ¿Dónde estarás?


Yaocelotl 01.05.25
# Desarrollo del MVP en Laravel con Configuración Centralizada

## Requerimientos del Sistema

*Versiones recomendadas:*
- PHP 8.1 o superior
- Composer 2.5 o superior
- Node.js 18.x o superior
- MySQL 8.0 o superior
- Laravel 10.x

## Estructura Inicial del Proyecto

*1. Crear proyecto y acceder al directorio:*
bash
composer create-project laravel/laravel misjueces
cd misjueces


*2. Instalar paquetes necesarios:*
bash
composer require laravel/breeze --dev
composer require spatie/laravel-permission
php artisan breeze:install
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
npm install
npm run build


## Archivos Específicos a Modificar

### 1. Configuración Principal (app.blade.php)

*Archivo:* resources/views/layouts/app.blade.php

php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    
    <!-- Configuración de CDNs desde variables -->
    <link href="{{ config('app.css_bootstrap') }}" rel="stylesheet">
    <link href="{{ config('app.css_fontawesome') }}" rel="stylesheet">
    <link href="{{ config('app.css_custom') }}" rel="stylesheet">
    
    @stack('styles')
</head>
<body>
    @include('partials.navbar')
    
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Configuración de JS desde variables -->
    <script src="{{ config('app.js_bootstrap') }}"></script>
    <script src="{{ config('app.js_jquery') }}"></script>
    @stack('scripts')
</body>
</html>


### 2. Configuración de CDNs (archivo .env)

*Archivo:* .env (agregar al final):

env
# Configuración de CDNs
CSS_BOOTSTRAP=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
CSS_FONTAWESOME=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css
CSS_CUSTOM=/css/app.css

JS_BOOTSTRAP=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js
JS_JQUERY=https://code.jquery.com/jquery-3.6.0.min.js


### 3. Configuración de la Aplicación

*Archivo:* config/app.php (agregar en el array 'config'):

php
'css_bootstrap' => env('CSS_BOOTSTRAP'),
'css_fontawesome' => env('CSS_FONTAWESOME'),
'css_custom' => env('CSS_CUSTOM'),
'js_bootstrap' => env('JS_BOOTSTRAP'),
'js_jquery' => env('JS_JQUERY'),

<!-- 
### 4. Sistema de Autenticación con Roles

*Ejecutar migraciones y seeders:*
bash
php artisan migrate
php artisan make:seeder RoleSeeder


*Archivo:* database/seeders/RoleSeeder.php -->
//php
//<?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
// use App\Models\User;

// class RoleSeeder extends Seeder
// {
//     public function run()
//     {
//         // Crear roles
//         $adminRole = Role::create(['name' => 'admin']);
//         $userRole = Role::create(['name' => 'user']);
        
//         // Crear permisos
//         Permission::create(['name' => 'manage users']);
//         Permission::create(['name' => 'manage judges']);
//         Permission::create(['name' => 'view votes']);
        
//         // Asignar permisos a roles
//         $adminRole->givePermissionTo(['manage users', 'manage judges', 'view votes']);
//         $userRole->givePermissionTo('view votes');
        
//         // Crear usuario admin
//         $admin = User::create([
//             'name' => 'Administrador',
//             'email' => 'admin@misjueces.mx',
//             'password' => bcrypt('password'),
//         ]);
        
//         $admin->assignRole('admin');
//     }
// } 


// Ejecutar el seeder:
// bash
// php artisan db:seed --class=RoleSeeder


// ### 5. Middleware para Roles

// *Archivo:* app/Http/Middleware/CheckRole.php (crear nuevo)

// bash
// php artisan make:middleware CheckRole


// Editar el archivo generado:
// php
// <?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class CheckRole
// {
//     public function handle(Request $request, Closure $next, string $role): Response
//     {
//         if (!$request->user() || !$request->user()->hasRole($role)) {
//             abort(403, 'No tienes permiso para acceder a esta sección');
//         }
        
//         return $next($request);
//     }
// }


// Registrar el middleware en app/Http/Kernel.php:
// php
// protected $routeMiddleware = [
//     // ...
//     'role' => \App\Http\Middleware\CheckRole::class,
// ];


// ### 6. Modelo User con Roles

// *Archivo:* app/Models/User.php

// php
// <?php

// namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Spatie\Permission\Traits\HasRoles;

// class User extends Authenticatable
// {
//     use HasFactory, Notifiable, HasRoles;

//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];
// }


// ### 7. Rutas Protegidas

// *Archivo:* routes/web.php

// php
// <?php

// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

// // Pública
// Route::get('/', function () {
//     return view('welcome');
// });

// // Autenticación
// require __DIR__.'/auth.php';

// // Rutas protegidas
// Route::middleware(['auth'])->group(function () {
//     // Dashboard
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
    
//     // Perfil
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
//     // Solo admin
//     Route::middleware(['role:admin'])->group(function () {
//         Route::get('/admin', function () {
//             return view('admin.dashboard');
//         })->name('admin.dashboard');
//     });
// });


// ## Estructura Final de Archivos Clave


// misjueces/
// ├── app/
// │   ├── Http/
// │   │   ├── Controllers/
// │   │   ├── Middleware/
// │   │   │   └── CheckRole.php
// │   │   └── Kernel.php
// │   ├── Models/
// │   │   └── User.php
// ├── config/
// │   └── app.php
// ├── database/
// │   ├── migrations/
// │   └── seeders/
// │       └── RoleSeeder.php
// ├── resources/
// │   ├── views/
// │   │   ├── auth/
// │   │   ├── layouts/
// │   │   │   └── app.blade.php
// │   │   ├── partials/
// │   │   │   └── navbar.blade.php
// │   │   └── dashboard.blade.php
// ├── routes/
// │   └── web.php
// └── .env


// ## Comandos Finales para Ejecutar

// bash
// # Instalar dependencias
// composer install
// npm install

// # Configurar base de datos (crear previamente en MySQL)
// php artisan migrate --seed

// # Compilar assets
// npm run build

// # Ejecutar servidor local
// php artisan serve


// ## Características Implementadas

// ✅ Configuración centralizada de CDNs desde .env  
// ✅ Sistema completo de autenticación con Breeze  
// ✅ Roles y permisos con Spatie Permission  
// ✅ Middleware para protección de rutas  
// ✅ Usuario admin inicial creado automáticamente  
// ✅ Estructura lista para extender desde app.blade.php  

// Para personalizar los CDNs, solo necesitas modificar las variables en tu archivo .env. Todos los cambios se reflejarán automáticamente en toda la aplicación gracias a la configuración centralizada.

// ¿Necesitas que desarrolle alguna parte adicional o prefieres que hagamos ajustes a lo propuesto?