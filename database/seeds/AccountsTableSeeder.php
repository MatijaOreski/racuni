<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
            'broj_racuna' => '10/52/8',
            'naziv' => 'Prima d.o.o.',
            'adresa' => 'Glavna 22',
            'grad' => '42000 Varaždin',
            'OIB' => 54567637626,
            'datum_racuna' => '2020.12.01', 
            'datum_valuta' => '2020.12.15'
        ],
            [
                'broj_racuna' => '42/32/2',
                'naziv' => 'Konzum d.o.o.',
                'adresa' => 'Varaždinska 15',
                'grad' => '42000 Varaždin',
                'OIB' => 54067137241,
                'datum_racuna' => '2020.12.12', 
                'datum_valuta' => '2020.12.27'
            ],
                [
                    'broj_racuna' => '50/63/7',
                    'naziv' => 'Bazinga d.o.o.',
                    'adresa' => 'Ulica Braće Radić 2c',
                    'grad' => '40000 Čakovec',
                    'OIB' => 54067137241,
                    'datum_racuna' => '2020.12.10', 
                    'datum_valuta' => '2020.12.25'
                    ]
        
            
        ]);
    }
}
