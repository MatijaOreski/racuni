<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(FromsTableSeeder::class);
         $this->call(AccountsTableSeeder::class);
         $this->call(ItemsTableSeeder::class);
         $this->call(ItemAccountsTableSeeder::class);
    }
}
