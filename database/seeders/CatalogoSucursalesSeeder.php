<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogoSucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogo_sucursales')->delete();

        DB::table('catalogo_sucursales')->insert([
            'sucId' => 'cuernavaca',
            'name' => 'Cuernavaca',
        ]);

        DB::table('catalogo_sucursales')->insert([
            'sucId' => 'yautepec',
            'name' => 'Yautepec',
        ]);
        DB::table('catalogo_sucursales')->insert([
            'sucId' => 'cuautla',
            'name' => 'Cuautla',
        ]);
        DB::table('catalogo_sucursales')->insert([
            'sucId' => 'acapulco',
            'name' => 'Acapulco',
        ]);
    }
}
