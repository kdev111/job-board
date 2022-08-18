<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignId('company')->constrained('companies');
            $table->foreignId('location')->constrained('locations');
            $table->boolean('remote_allowed');
            $table->boolean('hybrid_allowed');
            $table->boolean('inperson_allowed');
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->string('currency_code');
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
        Schema::dropIfExists('listings');
    }
}
