<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('skors', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
        $table->foreignId('id_chapter')->constrained('chapters')->onDelete('cascade');
        $table->integer('nilai');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skors');
    }
};
