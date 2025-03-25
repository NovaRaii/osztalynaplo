<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classbooks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('schoolclass_id');
            $table->foreign('schoolclass_id')->references('id')->on('classes');

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            $table->unsignedBigInteger('classessubject_id');
            $table->foreign('classessubject_id')->references('subject_id')->on('classessubjects');

            $table->unsignedBigInteger('mark_id');
            $table->foreign('mark_id')->references('id')->on('marks');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classbooks');
    }
};
