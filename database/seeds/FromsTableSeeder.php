<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FromsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('froms')->insert([
            'tvrtka' => 'Ovis d.o.o.',
            'adresa' => 'Ulica Braće Radić 10A',
            'grad' => '42000 Varaždin',
            'OIB' => 54067137241
        ]);
    }
}
