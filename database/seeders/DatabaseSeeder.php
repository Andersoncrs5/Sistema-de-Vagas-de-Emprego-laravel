<?php

namespace Database\Seeders;

use App\Models\usuariosModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(usuarioSeeder::class);
        $this->call(vagasSeeder::class);
        $this->call(comentariosSeeder::class);
    }

}
