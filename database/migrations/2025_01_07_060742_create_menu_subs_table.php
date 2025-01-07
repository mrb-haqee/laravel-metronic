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
            $table->unsignedBigInteger('idMenu');
            $table->unsignedInteger('indexSort');
            $table->json('pathMenu');
            $table->string('namaMenuSub', 255);
            // $table->string('controller', 255);
            $table->unsignedBigInteger('idUser')->default(1);
            $table->timestamps();

            // Tambahkan foreign key
            $table->foreign('idMenu')->references('id')->on('menu')->onDelete('cascade');
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
