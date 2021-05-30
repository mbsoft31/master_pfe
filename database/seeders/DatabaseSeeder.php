<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $super = User::create([
            "name" => "Super admin",
            "email" => "super@gmail.com",
            "password" => Hash::make("superadmin"),
        ]);





        $role_super = Role::create(['name' => 'super']);
        $role_admin = Role::create(['name' => 'admin']);
        $role_teacher = Role::create(['name' => 'teacher']);
        $role_student = Role::create(['name' => 'student']);

        $super->assignRole($role_super);

    }
}
