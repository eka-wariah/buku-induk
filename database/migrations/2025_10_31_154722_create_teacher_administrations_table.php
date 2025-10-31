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
        Schema::create('teacher_administrations', function (Blueprint $table) {
            $table->bigIncrements('tad_id');
            $table->string('tad_name');
            $table->string('tad_file');
            $table->timestamps();
            $table->renameColumn('updated_at', 'tad_updated_at');
            $table->renameColumn('created_at', 'tad_created_at');
            $table->unsignedBigInteger('tad_created_by')->nullable();
            $table->unsignedBigInteger('tad_deleted_by')->nullable();
            $table->unsignedBigInteger('tad_updated_by')->nullable();

            $table->softDeletes(); 
            $table->renameColumn('deleted_at', 'tad_deleted_at');
            
            $table->string('tad_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_administrations');
    }
};
