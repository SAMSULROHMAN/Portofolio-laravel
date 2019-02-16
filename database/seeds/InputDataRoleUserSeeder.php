<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use enkripsi
use Illuminate\Support\Facades\Hash;

class InputDataRoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'description' => 'Administrator'
        ]);

        DB::table('roles')->insert([
            'name' => 'User',
            'description' => 'Administrator'
        ]);

        DB::table('users')->insert([
            'email' => 'admin@mail.com',
            'name' => 'Administrator',
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);
    }
}
