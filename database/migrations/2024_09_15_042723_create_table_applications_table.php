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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('age');
            $table->string('address');
            $table->string('phone_number', 15);
            $table->string('job_location');
            $table->string('job_location_type');
            $table->string('position');
            $table->boolean('has_car')->default(false);
            $table->string('education');
            $table->string('expected_salary')->nullable();
            $table->string('upload_resume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
