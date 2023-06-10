<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdottisTable extends Migration
{
    /**n
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodottis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_prod');
            $table->string('url_img');
            $table->decimal('prezzo');
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('prodottis');
    }
}