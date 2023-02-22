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
            [
                'nome' => 'Aurelio Muzzi',
                'documento' => '27505328336',
                'email' => 'aurelio@gmail.com',
                'whatsapp' => '92993558124'
            ],
            [
                'nome' => 'João de Deus',
                'documento' => '66175384040',
                'email' => 'joaod@gmail.com',
                'whatsapp' => '92993337724'
            ],
            [
                'nome' => 'Maria de Jesus',
                'documento' => '39366572200',
                'email' => 'maria@hotmail.com',
                'whatsapp' => '92985558124'
            ],
            [
                'nome' => 'Leticia Sabatella',
                'documento' => '67506228521',
                'email' => 'leticiasss@gmail.com',
                'whatsapp' => '92993558124'
            ],
            [
                'nome' => 'Camila Queiroz',
                'documento' => '66007861678',
                'email' => 'camilinhaqq@gmail.com',
                'whatsapp' => '92991158124'
            ],
            [
                'nome' => 'Thais Araujo',
                'documento' => '42654067181',
                'email' => 'thaizoca@yahoo.com',
                'whatsapp' => '92993558774'
            ],
            [
                'nome' => 'Rodrigo Lombardi',
                'documento' => '82410173837',
                'email' => 'rodlomba@gmail.com',
                'whatsapp' => '92993558889'
            ],
            [
                'nome' => 'Gustavo Gianequinni',
                'documento' => '68567243653',
                'email' => 'gustavinsk@uol.com',
                'whatsapp' => '92994499124'
            ],
            [
                'nome' => 'Larissa Angel',
                'documento' => '63164778562',
                'email' => 'larissa@gmail.com',
                'whatsapp' => '92977558124'
            ],
            [
                'nome' => 'Paola Oliveira',
                'documento' => '86011088490',
                'email' => 'paolaoliver@gmail.com',
                'whatsapp' => '92916558124'
            ],
            [
                'nome' => 'Diogo Nogueira',
                'documento' => '34715264986',
                'email' => 'nogueira@hotmail.com',
                'whatsapp' => '92993577124'
            ],
            [
                'nome' => 'Ivete Sangalo',
                'documento' => '87312193730',
                'email' => 'veveta@gmail.com',
                'whatsapp' => '92993328124'
            ],
            [
                'nome' => 'Fausto Silva',
                'documento' => '08215721133',
                'email' => 'faustosilva@gmail.com',
                'whatsapp' => '92993522124'
            ],
            [
                'nome' => 'Rubens Barrichello',
                'documento' => '28892433628',
                'email' => 'rubinhobarr@gmail.com',
                'whatsapp' => '92993558456'
            ],
            [
                'nome' => 'Marieta Severo',
                'documento' => '63164778562',
                'email' => 'severomari@gmail.com',
                'whatsapp' => '92993558741'
            ]
        ];

        foreach ($clientes as $key => $cliente) {
            Cliente::firstOrCreate($cliente);
        }
    }
}
