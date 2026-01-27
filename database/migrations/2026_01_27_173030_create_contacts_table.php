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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();                    // auto-increment primary key
            $table->string('name');          // varchar(255), not null
            $table->string('email');         // longer text, can be null
            $table->string('phone_num');
            $table->boolean('is_active')->default(true);
            $table->timestamps();            // created_at + updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
