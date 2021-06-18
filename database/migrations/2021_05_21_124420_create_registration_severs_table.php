'<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationSeversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_severs', function (Blueprint $table) {
            $table->id('id_servidor');
            $table->timestamps();
            $table->string('nome')->unique();
            $table->string('link_servidor')->unique();
            $table->string('tags')->default('null');
            $table->string('descricao')->default('null');
            $table->string('resumo_servidor',90)->default('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_severs');
    }
}
