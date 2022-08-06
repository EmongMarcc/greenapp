<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamwhatsapps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamwhatsapps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('job')->nullable();
            $table->text('name')->nullable();
            $table->text('number')->nullable();
            $table->string('status')->default('Offline');
            $table->string('category_id')->default('Offline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teamwhatsapps');
    }
}
