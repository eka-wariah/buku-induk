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
        Schema::create('personal_data', function (Blueprint $table) {
            $table->bigIncrements('psd_id');
            $table->BigInteger('psd_nik');
            $table->string('psd_place_birth');
            $table->date('psd_date_birth'); 
            $table->enum('psd_gender', ['laki_laki', 'perempuan']);
            $table->string('psd_religion');
            $table->enum('psd_marital_status', ['sudah', 'belum']);
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('psd_created_by')->nullable();
            $table->unsignedBigInteger('psd_deleted_by')->nullable();
            $table->unsignedBigInteger('psd_updated_by')->nullable();
            $table->string('psd_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_data');
    }
};
