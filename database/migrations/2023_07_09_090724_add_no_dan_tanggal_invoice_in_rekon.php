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
            $table->string('no_invoice')->nullable();
            $table->timestamp('tanggal_invoice')->nullable();
            $table->string('user_invoice')->nullable();
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
