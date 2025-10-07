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
        Schema::create('teaching_histories', function (Blueprint $table) {
            $table->bigIncrements('tch_id');
            $table->string('tch_subject_name');
            $table->string('tch_school_name');
            $table->BigInteger('tch_grade');
            $table->BigInteger('tch_number_hours');
            $table->year('tch_year_enrolled');
            $table->year('tch_until');
            $table->enum('tch_status', [1 , 0]);
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('tch_created_by')->nullable();
            $table->unsignedBigInteger('tch_deleted_by')->nullable();
            $table->unsignedBigInteger('tch_updated_by')->nullable();
            $table->string('tch_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_histories');
    }
};
