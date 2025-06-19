<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('students', function (Blueprint $table) {
            $table->string("first_name")->comment("student's first name");
            $table->string("last_name")->comment("student's last name");
            $table->string("program")->comment("student's program");
            $table->string("enrollment_year", 4);
            $table->dateTime("birthday");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {}
};