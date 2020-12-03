<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_accounts', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('items_id');
            $table->foreign('items_id')->references('id')->on('items');

            $table->unsignedInteger('accounts_id');
            $table->foreign('accounts_id')->references('id')->on('accounts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_accounts');
    }
}
