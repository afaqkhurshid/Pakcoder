<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('website_url')->nullable();
            $table->text('description');
            $table->integer('active_users')->nullable();
            $table->integer('client_satisfaction')->nullable();
            $table->integer('months_development')->nullable();
            $table->decimal('app_store_rating', 3, 1)->nullable();
            $table->text('challenges')->nullable();
            $table->text('solutions')->nullable();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};