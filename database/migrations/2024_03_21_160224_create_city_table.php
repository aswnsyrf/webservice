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
        Schema::create('city', function (Blueprint $table) {
            $table->increments('city_id');// Merubah ini menjadi kolom primary key yang otomatis bertambah
            $table->foreignId('province_id')->constrained()->onDelete('cascade'); // Menggunakan foreignId untuk membuat kunci asing
            $table->string('city_type', 50);
            $table->string('city_name', 50);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city');
    }
};
