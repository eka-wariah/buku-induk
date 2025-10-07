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
            $table->bigIncrements('apl_id');
            $table->unsignedBigInteger('apl_user_id');
            $table->foreign('apl_user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->string('apl_job_possition');
            $table->enum('apl_status', [1 , 0]);
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('apl_created_by')->nullable();
            $table->unsignedBigInteger('apl_deleted_by')->nullable();
            $table->unsignedBigInteger('apl_updated_by')->nullable();
            $table->string('apl_sys_note')->nullable();
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
