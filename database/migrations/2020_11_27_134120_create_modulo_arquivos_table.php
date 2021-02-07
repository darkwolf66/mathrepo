<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuloArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_arquivos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('projeto_modulo_id');
            $table->foreign('projeto_modulo_id')->references('id')->on('projeto_modulos');

            $table->string('titulo');
            $table->enum('storage', ['local', 'google_drive']);
            $table->string('source');

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
        Schema::dropIfExists('modulo_arquivos');
    }
}
