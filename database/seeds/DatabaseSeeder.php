<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LuUserRolesSeeder::class);
        $this->call(LuBenefitsCategoriesSeeder::class);
        $this->call(LuVisibilityTypesSeeder::class);
    }
}
