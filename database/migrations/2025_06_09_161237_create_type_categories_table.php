<?php

use App\Constants;
use App\Models\TypeCategory;
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
        Schema::create(Constants::AR_TABLES['type_categories'], function (Blueprint $table) {
            $table->id();
            $table->foreignId(TypeCategory::AR_FIELDS['type_id'])->constrained(Constants::AR_TABLES['types']);
            $table->foreignId(TypeCategory::AR_FIELDS['category_id'])->constrained(Constants::AR_TABLES['categories']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Constants::AR_TABLES['type_categories']);
    }
};
