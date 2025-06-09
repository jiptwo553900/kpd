<?php

use App\Constants;
use App\Models\Category;
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
        Schema::create(Constants::AR_TABLES['categories'], function (Blueprint $table) {
            $table->id();
            $table->string(Category::AR_FIELDS['name']);
            $table->integer(Constants::SORT_FIELD)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Constants::AR_TABLES['categories']);
    }
};
