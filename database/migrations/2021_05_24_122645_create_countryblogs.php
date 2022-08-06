<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryblogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countryblogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->string('p_date')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->default('Inactive');
            $table->string('coverimage')->nullable();
            $table->string('avif')->nullable();
            $table->string('flags')->nullable();
            $table->string('regions')->nullable();
            $table->string('price')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countryblogs');
    }
}
