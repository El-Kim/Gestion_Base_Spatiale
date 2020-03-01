<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'Admin',
            'matricule' => '001',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        $capitaines = User::create([
            'name' => 'Pierre',
            'matricule' => '002',
            'email' => 'capitaines@capitaine.com',
            'password' => Hash::make('admin')
        ]);

        $pilotes = User::create([
            'name' => 'Paul',
            'matricule' => '003',
            'email' => 'pilotes@pilotes.com',
            'password' => Hash::make('admin')
        ]);

        $passagers = User::create([
            'name' => 'Eva',
            'matricule' => '004',
            'email' => 'passagers@passagers.com',
            'password' => Hash::make('admin')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $capitainesRole = Role::where('name', 'capitaines')->first();
        $pilotesRole = Role::where('name', 'pilotes')->first();
        $passagersRole = Role::where('name', 'passagers')->first();

        $admin->roles()->attach($adminRole);
        $capitaines->roles()->attach($capitainesRole);
        $pilotes->roles()->attach($pilotesRole);
        $passagers->roles()->attach($passagersRole);
    }
}
