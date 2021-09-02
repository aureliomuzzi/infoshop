<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = [
            [
                'nome_do_produto' => 'Smartphone Galaxy',
                'descricao_do_produto' => 'Samsung Galaxy G5',
                'referencia_do_produto' => 'Telefone',
                'imagem_do_produto' => '/storage/product-1.jpg',
                'categoria_id' => 2
            ],
            [
                'nome_do_produto' => 'Smartphone Motorola A7',
                'descricao_do_produto' => 'Motorola A7',
                'referencia_do_produto' => 'Smartphone',
                'imagem_do_produto' => '/storage/product-2.jpg',
                'categoria_id' => 2
            ],
            [
                'nome_do_produto' => 'Notebook Acer A15',
                'descricao_do_produto' => 'Acer A15',
                'referencia_do_produto' => 'Notebook',
                'imagem_do_produto' => '/storage/product-thumb-3.jpg',
                'categoria_id' => 4
            ],
            [
                'nome_do_produto' => 'Computador Lenovo',
                'descricao_do_produto' => 'Lenovo A15',
                'referencia_do_produto' => 'Notebook',
                'imagem_do_produto' => '/storage/product-thumb-3.jpg',
                'categoria_id' => 3
            ],
            [
                'nome_do_produto' => 'SmartTV 100" Philips',
                'descricao_do_produto' => 'SmartTV Philips 100"',
                'referencia_do_produto' => 'Televisor',
                'imagem_do_produto' => '/storage/product-thumb-4.jpg',
                'categoria_id' => 1
            ],
        ];

        foreach ($produtos as $key => $produto) {
            Produto::create($produto);
        }
    }
}
