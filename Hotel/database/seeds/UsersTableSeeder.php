<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'adminov',
            'telephone' => 555,
            'postal' => 69420,
            'email' => 'admin@admin.fr',
            'password' => bcrypt('admin1234'),
            'role' => 'administrator',
        ]);
        DB::table('users')->insert([
            'name' => 'notadmin',
            'surname' => 'notadminov',
            'telephone' => 666,
            'postal' => 42069,
            'email' => 'notadmin@notadmin.fr',
            'password' => bcrypt('notadmin1234'),
            'role' => 'notadmin',
        ]);
    }
}


