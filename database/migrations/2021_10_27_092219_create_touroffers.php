<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouroffers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touroffers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('tour_img');
            $table->text('keywords');
            $table->text('description');
            $table->json('json_include')->nullable();
            $table->string('offer_sitelink');
            $table->string('datepublish');
            $table->string('datestart')->nullable();
            $table->string('dateend')->nullable();
            $table->string('status')->default('Inactive');
            $table->string('countryId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('touroffers');
    }
}
