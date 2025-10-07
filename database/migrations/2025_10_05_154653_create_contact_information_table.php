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
        Schema::create('contact_information', function (Blueprint $table) {
            $table->bigIncrements('cti_id');
            $table->string('cti_address');
            $table->BigInteger('cti_neighborhood');
            $table->BigInteger('cti_community_association');
            $table->string('cti_village');
            $table->string('cti_sub_district');
            $table->string('cti_regency');
            $table->string('cti_province');
            $table->string('cti_postal_code');
            $table->string('cti_telephone_number');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('cti_created_by')->nullable();
            $table->unsignedBigInteger('cti_deleted_by')->nullable();
            $table->unsignedBigInteger('cti_updated_by')->nullable();
            $table->string('cti_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_information');
    }
};
