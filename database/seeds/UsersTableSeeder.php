<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuario con el rol editor
        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('123456')
            ]);

        $editor->assignRole('editor');

        //Usuario con el rol moderador
        $moderador = User::create([
            'name' => 'moderador',
            'email' => 'moderador@gmail.com',
            'password' => bcrypt('123456')
            ]);

        $moderador->assignRole('moderador');

        //Usuario con el rol super admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
            ]);

        $admin->assignRole('super-admin');
    }
}
