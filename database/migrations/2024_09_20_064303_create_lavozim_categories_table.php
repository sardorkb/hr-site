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
        Schema::create('lavozim_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('positions', function (Blueprint $table) {
            $table->unsignedBigInteger('lavozim_category_id')->nullable(); // Change to lavozim_category_id
            $table->foreign('lavozim_category_id')->references('id')->on('lavozim_categories')->onDelete('set null'); // Update foreign key reference
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->dropForeign(['lavozim_category_id']); // Update to lavozim_category_id
            $table->dropColumn('lavozim_category_id'); // Update to lavozim_category_id
        });
        
        Schema::dropIfExists('lavozim_categories');
        
    }
};
