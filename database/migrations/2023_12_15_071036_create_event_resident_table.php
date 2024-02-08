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
        Schema::create('event_resident', function (Blueprint $table) {
            /// описание pivot отношений до 7 лары ///
            // $table->unsignedBigInteger('event_id');
            // $table->foreign('event_id')->references('id')->on('events');
            // $table->unsignedBigInteger('resident_id');
            // $table->foreign('resident_id')->references('id')->on('residents');

            /// их рефактор для актуальных версий/// 
            $table->foreignId('event_id')->constrained();
            $table->foreignId('resident_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_residents');
    }
};
