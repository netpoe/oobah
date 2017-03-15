<?php

use Illuminate\Database\Seeder;

class LuVisibilityTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lu_visibility_types')->insert([
            'type' => 'internal',
        ]);

        DB::table('lu_visibility_types')->insert([
            'type' => 'public',
        ]);
    }
}
