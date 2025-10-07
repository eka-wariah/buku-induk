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
        Schema::create('educational_backgrounds', function (Blueprint $table) {
            $table->bigIncrements('edb_id');
            $table->string('edb_elementary_School_name');
            $table->year('edb_grad_year_es');
            $table->string('edb_junior_high_school_name');
            $table->year('edb_grad_year_jhs');
            $table->string('edb_high_school_name');
            $table->year('edb_grad_year_shs');
            $table->string('edb_university_name');
            $table->string('edb_faculty');
            $table->string('edb_major');
            $table->year('edb_grad_year_unv');
            $table->string('edb_degree');
            $table->timestamps();
            $table->softDeletes(); // gunakan deleted_at

            // Kolom audit
            $table->unsignedBigInteger('edb_created_by')->nullable();
            $table->unsignedBigInteger('edb_deleted_by')->nullable();
            $table->unsignedBigInteger('edb_updated_by')->nullable();
            $table->string('edb_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_backgrounds');
    }
};
