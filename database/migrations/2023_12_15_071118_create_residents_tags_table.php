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
        Schema::create('residents_tags', function (Blueprint $table) {
            /// описание pivot отношений до 7 лары ///
            // $table->unsignedBigInteger('resident_id');
            // $table->foreign('resident_id')->references('id')->on('residents');
            // $table->unsignedBigInteger('tag_id');
            // $table->foreign('tag_id')->references('id')->on('tags');

            /// их рефактор для актуальных версий/// 
            $table->foreignId('resident_id')->constrained();
            $table->foreignId('tag_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents_tags');
    }
};
