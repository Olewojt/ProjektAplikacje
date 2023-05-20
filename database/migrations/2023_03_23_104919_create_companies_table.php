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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 60);
            $table->string('description', 1024);
            $table->string('regon', 14);
            $table->string('nip', 10);
            $table->string('phone_number', 9);
            $table->string('e_mail', 100);
            $table->string('website', 200);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('industry_id')->constrained('industries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
