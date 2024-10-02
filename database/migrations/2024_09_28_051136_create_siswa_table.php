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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelas_id',)->unsigned();
            $table->foreign('kelas_id')->references ('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nis',7)->unique();
            $table->string('nama',100);
            $table->enum('gender', ['male','female']);
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};