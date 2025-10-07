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
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('prn_id');
            $table->unsignedBigInteger('prn_user_id');
            $table->foreign('prn_user_id')->references('usr_id')->on('users')->onDelete('cascade');
            $table->string('prn_father_name');
            $table->string('prn_father_occupation');
            $table->bigInteger('prn_father_phone');
            $table->string('prn_mother_name');
            $table->string('prn_mother_occupation');
            $table->bigInteger('prn_mother_phone');
            $table->string('prn_guardian_name');
            $table->string('prn_guardian_occupation');
            $table->bigInteger('prn_guardian_phone');
            $table->bigInteger('prn_family_income_level');
            $table->enum('prn_economy_status', [1 , 0]);
            $table->enum('prn_status', [1 , 2 , 3]);
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('prn_created_by')->nullable();
            $table->unsignedBigInteger('prn_deleted_by')->nullable();
            $table->unsignedBigInteger('prn_updated_by')->nullable();
            $table->string('prn_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
