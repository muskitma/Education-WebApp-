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
            $table->string('uname')->unique();
            $table->string('password');
           
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('address');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('department');
            $table->date('joined_date');

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