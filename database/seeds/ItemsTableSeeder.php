<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'id' => 1,
                'naziv' => 'Huawei P20',
                'opis' => 'Pametni mobitel',
                'cijena' => 900.00,
                'kolicina' => 2
            ],
            [
                'id' => 2,
                'naziv' => 'Newest HP',
                'opis' => 'Laptop',
                'cijena' => 500.00,
                'kolicina' => 1
            ],
            [
                'id' => 3,
                'naziv' => 'Acer K202HQL',
                'opis' => 'kompjuterski monitor',
                'cijena' => 800.00,
                'kolicina' => 1
            ]
        
            
        ]);
    }
}
