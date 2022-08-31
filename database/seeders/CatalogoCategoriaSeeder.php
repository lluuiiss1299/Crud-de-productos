<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogo_categorias')->delete();

        DB::table('catalogo_categorias')->insert([
            'catId' => 'electronica',
            'name' => 'Electronica',
        ]);

        DB::table('catalogo_categorias')->insert([
            'catId' => 'lineaBlanca',
            'name' => 'Linea Blanca',
        ]);
        DB::table('catalogo_categorias')->insert([
            'catId' => 'deportes',
            'name' => 'Deportes',
        ]);
        DB::table('catalogo_categorias')->insert([
            'catId' => 'alimentos',
            'name' => 'Alimentos',
        ]);
        DB::table('catalogo_categorias')->insert([
            'catId' => 'jardin',
            'name' => 'Jardin',
        ]);
    }
}
