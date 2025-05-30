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
    Schema::create('chapters', function (Blueprint $table) {
        $table->id();
        $table->foreignId('level_id')->constrained()->onDelete('cascade');
        $table->text('pertanyaan');
        $table->string('opsiA');
        $table->string('opsiB');
        $table->string('opsiC');
        $table->string('opsiD');
        $table->string('jawabanBenar');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
