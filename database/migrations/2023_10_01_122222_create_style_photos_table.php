<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('style_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('style_id')->unsigned();
            $table->longText('photo');
            $table->foreign('style_id')
                ->references('id')
                ->on('styles')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('style_photos');
    }
};
