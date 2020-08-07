<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_trainees', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable;
            $table->string('surname')->nullable;
            $table->string('other_names')->nullable;
            $table->string('gender')->nullable;
            $table->string('age')->nullable;
            $table->string('course')->nullable;
            $table->string('qualification')->nullable;
            $table->string('email')->nullable;
            $table->string('phone')->nullable;
            $table->string('state')->nullable;
            $table->string('interest')->nullable;
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
        Schema::dropIfExists('graduate_trainees');
    }
}
