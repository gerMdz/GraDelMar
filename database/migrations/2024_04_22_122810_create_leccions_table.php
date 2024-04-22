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
        Schema::create('lecciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->text('description');
            $table->string('image_uri', 255)->nullable();
            $table->string('video_uri', 255)->nullable();
            $table->string('pdf_uri', 255)->nullable();
            $table->string('content_uri', 255)->nullable();
            $table->unsignedInteger('nivel_id');
            $table->timestamps();

            $table->foreign('nivel_id')
                ->references('id')->on('niveles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leccions');
    }
};
