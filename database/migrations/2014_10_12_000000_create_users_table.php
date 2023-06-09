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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('email',180)->unique();
            $table->string('password');
            $table->string('address',100);
            $table->string('city',50);
            $table->string('country',50);
            $table->string('postal_code',20);
            $table->boolean('role');
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
