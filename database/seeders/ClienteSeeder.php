<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = [
            ['nome' => 'Aurelio Muzzi'],
            ['nome' => 'João de Deus'],
            ['nome' => 'Maria de Jesus'],
            ['nome' => 'Leticia Sabatella'],
            ['nome' => 'Camila Queiroz'],
            ['nome' => 'Thais Araujo'],
            ['nome' => 'Rodrigo Lombardi'],
            ['nome' => 'Gustavo Gianequinni'],
            ['nome' => 'Larissa Angel'],
            ['nome' => 'Paola Oliveira'],
            ['nome' => 'Diogo Nogueira'],
            ['nome' => 'Ivete Sangalo'],
            ['nome' => 'Fausto Silva'],
            ['nome' => 'Rubens Barrichello'],
            ['nome' => 'Marieta Severo']
        ];

        foreach ($clientes as $key => $cliente) {
            Cliente::firstOrCreate($cliente);
        }
    }
}
