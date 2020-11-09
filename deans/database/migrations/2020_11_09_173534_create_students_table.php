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
            $table->id('student_id')->autoIncrement();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('name');
            $table->date('birthday');
            $table->foreignId('nationality_id')->constrained('nationalities', 'nationality_id')->onDelete('cascade');
            $table->foreignId('stream_id')->constrained('streams', 'stream_id')->onDelete('cascade');
            $table->foreignId('speciality_id')->constrained('specialities', 'speciality_id')->onDelete('cascade');
            $table->foreignId('address_id')->constrained('addresses', 'address_id')->onDelete('cascade');
            $table->foreignId('study_id')->constrained('type_studies', 'study_id')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
