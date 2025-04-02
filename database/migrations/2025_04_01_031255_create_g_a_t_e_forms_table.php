<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGATEFormsTable extends Migration
{
    public function up()
    {
        Schema::create('g_a_t_e_forms', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->date('dob');
            $table->string('gender');
            $table->string('contact', 10);
            $table->string('email')->unique();
            $table->string('state');
            $table->string('pincode', 6);
            $table->string('degree');
            $table->string('specialization');
            $table->string('university');
            $table->integer('yearofpassing');
            $table->string('papercode');
            $table->text('address');
            $table->string('examcenter');
            $table->string('photo'); // Path to uploaded photo
            $table->string('signature'); // Path to uploaded signature
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('g_a_t_e_forms');
    }
};


