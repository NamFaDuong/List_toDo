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
        Schema::create('_to_do_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Userid');
            $table->string('Title');
            $table->string('Description');
            $table->foreign('Userid')
                  ->references('id')
                  ->on('account')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_to_do_list');
    }
};
