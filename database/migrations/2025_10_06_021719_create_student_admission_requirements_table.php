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
        Schema::create('student_admission_requirements', function (Blueprint $table) {
            $table->bigIncrements('sar_id');
            $table->string('sar_name');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('sar_created_by')->nullable();
            $table->unsignedBigInteger('sar_deleted_by')->nullable();
            $table->unsignedBigInteger('sar_updated_by')->nullable();
            $table->string('sar_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_admission_requirements');
    }
};
