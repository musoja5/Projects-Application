<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name')->unique(); 
            $table->integer('stud_number');
            $table->date('year');
            $table->date('year_end');
            $table->string('cse_cmd');
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
        Schema::dropIfExists('stud_classes');
    }
}
