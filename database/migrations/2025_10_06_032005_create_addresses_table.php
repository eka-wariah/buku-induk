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
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('adr_id');
            $table->unsignedBigInteger('adr_user_id');
            $table->foreign('adr_user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->string('adr_province');
            $table->string('adr_regency');
            $table->string('adr_district');
            $table->string('adr_detail');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('adr_created_by')->nullable();
            $table->unsignedBigInteger('adr_deleted_by')->nullable();
            $table->unsignedBigInteger('adr_updated_by')->nullable();
            $table->string('adr_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
