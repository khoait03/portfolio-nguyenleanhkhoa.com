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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order')->default(1);
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->text('description')->nullable();
            $table->string('main_image', 255)->nullable();
            $table->json('images')->nullable();
            $table->json('technology')->nullable();
            $table->json('role')->nullable()
                ->comment('Vai trò trong dự án');

            $table->string('customer', 100)->nullable();
            $table->string('execution_time', 30)->nullable();

            $table->string('link_demo', 255)->nullable();
            $table->string('github', 255)->nullable();
            $table->boolean('status')->default(0);
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('meta_keyword', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
