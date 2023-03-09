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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("student_id")->nullable();
            $table->string("name")->nullable();
            $table->string("gender")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("father_name")->nullable();
            $table->string("mother_name")->nullable();
            $table->string("other")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
