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
        Schema::create('origin_schools', function (Blueprint $table) {
            $table->bigIncrements('ors_id');
            $table->unsignedBigInteger('ors_user_id');
            $table->foreign('ors_user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->string('ors_school_name');
            $table->bigInteger('ors_npsn');
            $table->string('ors_un_participant_number');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('ors_created_by')->nullable();
            $table->unsignedBigInteger('ors_deleted_by')->nullable();
            $table->unsignedBigInteger('ors_updated_by')->nullable();
            $table->string('ors_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origin_schools');
    }
};
