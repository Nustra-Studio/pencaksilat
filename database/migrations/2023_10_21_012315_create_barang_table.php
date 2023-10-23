<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->integer('category_id');
            $table->integer('supplier_id');
            $table->string('kode_barang');
            $table->decimal('harga_jual',10, 2);
            $table->decimal('harga_pokok', 10, 2);
            $table->integer('stok');

            $table->string('judul')->required();

            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
