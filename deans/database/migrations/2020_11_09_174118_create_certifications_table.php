<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id('certification_id')->autoIncrement();
            $table->string('university_logo');
            $table->string('university_organization');
            $table->string('title');
            $table->string('paragraph');
            $table->string('main_part');
            $table->string('license');
            $table->date('exp_date');
            $table->foreignId('certification_type_id')->constrained('certification_types', 'certification_type_id')->onDelete('cascade');
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
        Schema::dropIfExists('certifications');
    }
}
