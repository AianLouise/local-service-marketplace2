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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hiring_form_id');
            $table->string('title');
            $table->date('start');
            $table->date('end');
            $table->timestamps();

            // Adding the foreign key constraint
            $table->foreign('hiring_form_id')
                ->references('id')
                ->on('hiring_forms')
                ->onDelete('cascade'); // You can adjust the onDelete behavior based on your needs
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
