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
            $table->string('link-servidor')->unique();
            $table->string('tags');
            $table->string('descricao');
            $table->string('resumo_servidor',100);
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
