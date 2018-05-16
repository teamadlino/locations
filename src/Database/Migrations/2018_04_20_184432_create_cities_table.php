<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')
                ->on('provinces')->onDelete('cascade');
            $table->integer('county_id')->unsigned();
            $table->foreign('county_id')->references('id')
                ->on('counties')->onDelete('cascade');
            $table->string('name', 64);
            $table->string('en_name', 64)->nullable();
            $table->unsignedTinyInteger('area_code')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->boolean('approved')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
