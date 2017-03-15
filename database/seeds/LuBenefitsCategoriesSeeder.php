<?php

use Illuminate\Database\Seeder;

class LuBenefitsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lu_benefits_categories')->insert([
            'name' => 'Transporte',
        ]); 
        DB::table('lu_benefits_categories')->insert([
            'name' => 'Capacitación',
        ]); 
        DB::table('lu_benefits_categories')->insert([
            'name' => 'Despensa',
        ]); 
        DB::table('lu_benefits_categories')->insert([
            'name' => 'Familia',
        ]); 
        DB::table('lu_benefits_categories')->insert([
            'name' => 'Restaurantes',
        ]); 
        DB::table('lu_benefits_categories')->insert([
            'name' => 'Entretenimiento',
        ]); 
    }
}
