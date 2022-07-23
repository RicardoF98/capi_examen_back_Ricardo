<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDomicilioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table ->bigIncrements('user_id');
            $table ->string('domicilio',255);
            $table ->string('numero_exterior',50);
            $table ->string('colonia',100);
            $table ->string('cp',15);
            $table -> string ('ciudad',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_domicilio');
    }
}
