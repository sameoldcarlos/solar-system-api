<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string("name", 25);
            $table->integer("number");
            $table->float("surface_area", 13,2);
            $table->double("gravity");
            $table->float("mass", 30, 2);
            $table->float("radius", 5, 3);
            $table->double("orbital_period");
            $table->double("rotation_period");
            $table->string("image", 200);
            $table->float("distance_from_sun", 4, 2);
            $table->double("temperature");
            $table->double("density");
            $table->float("atm_pressure");
            $table->dateTime("created_at")->default(now())->nullable();
            $table->dateTime("updated_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planets');
    }
}
