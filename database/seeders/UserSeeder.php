<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  User::create([
        'name' => 'Super Admin',
        'prenom' => 'Admin',
        'email' => 'superadmin.info@gmail.com',
        'matricule' => '123456',
        'cin'=>'14511341',
        'password' => Hash::make('123456789'), // Assurez-vous de hasher le mot de passe
        'role' => 'super_admin',
    ]);
        //
    }
}
