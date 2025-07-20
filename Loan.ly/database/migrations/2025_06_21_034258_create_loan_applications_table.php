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
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengguna')->nullable()->constrained('users');
            $table->foreignId('id_penyedia')->nullable()->constrained('loanproviders');
            $table->string('jenis_pinjaman');
            $table->decimal('jumlah_pinjaman_diminta',10,2);
            $table->integer('jangka_waktu_bulan');
            $table->string('status_aplikasi');
            $table->decimal('monthly_payment', 10, 2)->nullable();
            $table->timestamps();
        

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
