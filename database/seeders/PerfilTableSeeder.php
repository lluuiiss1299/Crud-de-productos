<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfils')->delete();

        DB::table('perfils')->insert([
            'id' => 'capturista',
            'name' => 'Capturista',
            'permisions' => '["registro_producto"]'
        ]);

        DB::table('perfils')->insert([
            'id' => 'administrador',
            'name' => 'Administrador',
            'permisions' => '["bandeja, registro_producto"]'
        ]);
    }
}
