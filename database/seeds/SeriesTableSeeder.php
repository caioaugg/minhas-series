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
        DB::table('series')->insert([
            'id' => '1',
            'nome' => 'Dois Homens e Meio',
            'sinopse' => 'As interações sociais de dois homens, um solteiro e um divorciado, e o filho de um deles.',
            'genero_id' => '1',
        ]);
    }
}
