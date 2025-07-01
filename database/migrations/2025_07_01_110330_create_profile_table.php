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
        Schema::create('profile', function (Blueprint $table) {
            $table->id('id_profile');
            $table->string('name');
            $table->string('motto1');
            $table->string('motto2');
            $table->string('sekilas_info1');
            $table->string('sekilas_info2');
            $table->string('sekilas_info3');
            $table->string('sekilas_info4');
            $table->string('proyek');
            $table->string('logo');
            $table->text('tentang_kami');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
