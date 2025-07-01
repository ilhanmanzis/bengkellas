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
        Schema::create('sosmed', function (Blueprint $table) {
            $table->id('id_sosmed');
            $table->string('email')->nullable();
            $table->text('alamat');
            $table->string('wa');
            $table->string('fb')->nullable();
            $table->string('url_fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('url_linkedin')->nullable();
            $table->string('yt')->nullable();
            $table->string('url_yt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosmed');
    }
};
