<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('series')->insert([
            'nome'=>'A ordem',
            'sinopse'=>'Uma alcateia de lobisomens lutando contra uma ordem secreta com planos malignos',
            'genero_id'=>4
        ]);
    }
}
