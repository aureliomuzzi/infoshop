<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estoque;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estoque = [
            [
                'produto_id' => 2,
                'categoria_id' => 3,
                'qtd_min' => 13,
                'qtd_max' => 25,
                'qtd_atual' => 19,
                'vl_unitario' => 15.00
            ],
            [
                'produto_id' => 3,
                'categoria_id' => 1,
                'qtd_min' => 25,
                'qtd_max' => 56,
                'qtd_atual' => 32,
                'vl_unitario' => 17.000
            ]
        ];
        
        foreach ($estoque as $key => $e) {
            Estoque::create($e);
        }
    }
}
