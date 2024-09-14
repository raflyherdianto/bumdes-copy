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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('loan_id')->nullable();
            $table->decimal('nominal_pembayaran', 12);
            $table->enum('status', ['pending', 'dibayar'])->default('pending');
            $table->string('receipt')->unique();
            $table->date('awal_bayar');
            $table->date('akhir_bayar');
            $table->integer('keterlambatan')->default(0);
            $table->decimal('denda')->default(0.00);
            $table->dateTime('tanggal_pembayaran');
            $table->timestamps();

            $table->foreign('loan_id')->references('id')->on('loans')->cascadeOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_details');
    }
};
