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
        Schema::create('majors', function (Blueprint $table) {
            $table->bigIncrements('mjr_id');
            $table->string('mjr_name');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('mjr_created_by')->nullable();
            $table->unsignedBigInteger('mjr_deleted_by')->nullable();
            $table->unsignedBigInteger('mjr_updated_by')->nullable();
            $table->string('mjr_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
