<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        $this->call(CatalogoCategoriaSeeder::class);
        $this->call(CatalogoSucursalesSeeder::class);
        $this->call(PerfilTableSeeder::class);
    }
}
