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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->bigIncrements('bio_id');
            $table->longText('bio_introduction');
            $table->unsignedBigInteger('bio_user_id');
            $table->foreign('bio_user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->bigInteger('bio_nis');
            $table->bigInteger('bio_nisn');
            $table->unsignedBigInteger('bio_class_id');
            $table->foreign('bio_class_id')->references('cls_id')->on('classes')->onDelete('cascade');
            $table->enum('bio_gender', [1 , 0]);
            $table->unsignedBigInteger('bio_religion_id');
            $table->foreign('bio_religion_id')->references('rlg_id')->on('religions')->onDelete('cascade');
            $table->string('bio_place_of_birth');
            $table->date('bio_date_of_birth');
            $table->bigInteger('bio_height');
            $table->bigInteger('bio_weight');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('bio_created_by')->nullable();
            $table->unsignedBigInteger('bio_deleted_by')->nullable();
            $table->unsignedBigInteger('bio_updated_by')->nullable();
            $table->string('bio_sys_note')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
