<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supllier_name');
            $table->string('supllier_number');
            $table->text('supllier_address');
            $table->string('start_date');
            $table->string('city_area');
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
        Schema::dropIfExists('suplliers');
    }
}
