<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'administrar']);
        $role = Role::create(['name' => 'Administrador']);
        $role->syncPermissions("administrar");
        // create user
        $user1= User::create([
            'dni' => '70066422',
            'firstname' => 'Cardenas',
            'lastname' => 'A.',
            'names' => 'Anthony',
            'password' => Hash::make('12345678'),
            'datebirth' => '1994-03-08',
            'cellphone' => '986547813',
            'sex' => 'M',
            'email' => 'logicainformatica18@gmail.com',
               'google_id' => '2',
        ]);
        //asignar rol
        $user1->assignRole('Administrador');
        ///////////////////////////////////////////////////////////////////////

Permission::create(['name' => 'Responder encuesta']);
$role = Role::create(['name' => 'Encuestador']);
$role->syncPermissions("Responder encuesta");
//

// create user
$user3= User::create([
    'dni' => '44444444',
    'firstname' => 'Cardenas',
    'lastname' => 'Aquino',
    'names' => 'Anthony Robert',
    'password' => Hash::make('12345678'),
    'datebirth' => '2000-10-10',
    'cellphone' => '999999999',
    'sex' => 'M',
    'email' => 'logicainformatica20@gmail.com',
       'google_id' => '3',
]);
//
$user3->assignRole('Encuestador');
//
 }
}
