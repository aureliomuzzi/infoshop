<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'descricao' => 'Eletronicos'
            ],
            [
                'descricao' => 'Smartphone'
            ],
            [
                'descricao' => 'Computadores'
            ],
            [
                'descricao' => 'Notebooks'
            ],
            [
                'descricao' => 'Softwares'
            ],
            [
                'descricao' => 'Perifericos'
            ]
        ];

        foreach ($categorias as $key => $categoria) {
            Categoria::firstOrCreate($categoria);
        }
    }
}
