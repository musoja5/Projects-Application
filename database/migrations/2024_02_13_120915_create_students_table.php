<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('stud_svc_no')->unique();
            $table->string('rank');
            $table->string('stud_fname');
            $table->string('stud_lname');
            $table->string('stud_email')->unique();
            $table->string('stud_phone')->unique();
            $table->string('pname');
            $table->text('pdescription');
            $table->string('file');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('class_name')
                  ->references('class_name')
                  ->on('stud_classes')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
