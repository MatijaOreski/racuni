<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_accounts')->insert([
            [
                'items_id' => 1,
                'accounts_id' => 1
            ],
            [
                'items_id' => 2,
                'accounts_id' => 1
            ],
            [
                'items_id' => 1,
                'accounts_id' => 2
            ],
            [
                'items_id' => 3,
                'accounts_id' => 2
            ],
            [
                'items_id' => 1,
                'accounts_id' => 3
            ],
            [
                'items_id' => 2,
                'accounts_id' => 3
            ],
            [
                'items_id' => 3,
                'accounts_id' => 3
            ]
            

        ]);
    }
}
