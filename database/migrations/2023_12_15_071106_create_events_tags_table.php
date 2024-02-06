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
        Schema::create('events_tags', function (Blueprint $table) {
            /// описание pivot отношений до 7 лары ///
            // $table->unsignedBigInteger('event_id');
            // $table->foreign('event_id')->references('id')->on('events');
            // $table->unsignedBigInteger('tag_id');
            // $table->foreign('tag_id')->references('id')->on('tags');

            /// их рефактор для актуальных версий/// 
            $table->foreignId('event_id')->constrained();
            $table->foreignId('tag_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_tags');
    }
};
