<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BaseDadosTeste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    /**
     * usando o comando php artisan make:migration BASEDADOSTESTE --create=pessoa
     * cria neste ficheiro a base de dados do projecto podemos tambem alterar o
     * ficheiro para adicionar novos campos e tabelas
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('pessoa');
    }
}
