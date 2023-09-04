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
        Schema::table('rekons', function (Blueprint $table) {
            $table->string('admin_pusat_acc')->nullable();
            $table->string('maskapai_pusat_acc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rekons', function (Blueprint $table) {
            //
        });
    }
};
