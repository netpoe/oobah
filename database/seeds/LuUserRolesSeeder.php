<?php

use Illuminate\Database\Seeder;

class LuUserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lu_user_roles')->insert([
            'role' => 'super-admin',
        ]);

        DB::table('lu_user_roles')->insert([
            'role' => 'employee',
        ]);
    }
}
