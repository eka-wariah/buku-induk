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
        Schema::create('academic_years', function (Blueprint $table) {
            $table->bigIncrements('acy_id');
            $table->BigInteger('acy_starting_year');
            $table->BigInteger('acy_year_over');
            $table->BigInteger('acy_status');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('acy_created_by')->nullable();
            $table->unsignedBigInteger('acy_deleted_by')->nullable();
            $table->unsignedBigInteger('acy_updated_by')->nullable();
            $table->string('acy_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_years');
    }
};
