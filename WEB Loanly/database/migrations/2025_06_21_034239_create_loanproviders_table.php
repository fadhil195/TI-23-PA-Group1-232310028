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
        Schema::create('loanproviders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyedia')->unique();
            $table->string('tipe_pinjaman');
            $table->decimal('rating', 2, 1);
            $table->decimal('apr_min_estimasi', 5, 2);
            $table->decimal('apr_max_estimasi', 5, 2);
            $table->integer('skor_kredit_min_estimasi');
            $table->integer('jangka_waktu_max_bulan');
            $table->text('deskripsi');
            $table->string('logo')->nullable(); // Optional logo field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loanproviders');
    }
};
