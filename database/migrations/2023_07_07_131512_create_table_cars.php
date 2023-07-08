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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string("codename");
            $table->unsignedBigInteger("hp")->nullable();
            $table->boolean("show")->default(1);

            $table->timestamps();
            $table->softDeletes();

            //FK
            $table->unsignedBigInteger("mark_id")->nullable();

            $table->index("mark_id", "car_mark_idx");
            $table->foreign("mark_id", "car_mark_fk")->on("marks")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
