<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert([
            'id' => '1',
            'nome' => 'Comédia',
        ]);
        DB::table('generos')->insert([
            'id' => '2',
            'nome' => 'Drama',
        ]);
        DB::table('generos')->insert([
            'id' => '3',
            'nome' => 'Ficção Científica',
        ]);
        DB::table('generos')->insert([
            'id' => '4',
            'nome' => 'Suspense',
        ]);
    }
}
