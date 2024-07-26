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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('branch_Office');
            $table->string('full_name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('status');
            $table->string('probability');
            $table->string('lead_type');
            $table->string('lead_channel');
            $table->string('lead_number');
            $table->string('lead_media');
            $table->string('lead_source');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
