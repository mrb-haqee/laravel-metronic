<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_sub', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedInteger('index_sort');
            $table->string('group', 255);
            $table->json('path');
            $table->string('nama_sub', 255);
            $table->string('status_sub', 30)->default('Aktif');
            $table->unsignedBigInteger('user_id')->default(1);
            $table->timestamps();

            // Tambahkan foreign key
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_sub');
    }
};
