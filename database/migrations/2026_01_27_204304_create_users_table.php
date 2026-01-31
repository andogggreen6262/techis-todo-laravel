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
            $table->string('name', 15);    // ヒント画像に基づいた設定
            $table->string('phone', 15)->nullable();
            $table->string('email', 254);  // ヒント画像に基づいた設定
            $table->string('password'); // ★これを追加！
            $table->timestamps();
        });
    }
};