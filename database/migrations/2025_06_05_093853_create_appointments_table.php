<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            
            // Data pasien
            $table->string('nama', 100);
            $table->string('no_hp', 20);
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat');
            $table->text('keluhan');
            
            // Jadwal appointment
            $table->date('tanggal');
            $table->time('jam');  // Kolom jam terpisah
            
            // Manajemen status
            $table->enum('status', [
                'pending',      // Menunggu konfirmasi
                'confirmed',    // Dikonfirmasi admin
                'completed',    // Sudah selesai
                'cancelled',    // Dibatalkan
                'rescheduled'   // Dijadwal ulang
            ])->default('pending');
            
            // Kolom untuk admin
            $table->text('admin_notes')->nullable(); // Catatan admin
            $table->foreignId('confirmed_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('confirmed_at')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};