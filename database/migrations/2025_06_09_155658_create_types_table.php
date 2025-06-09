<?php

use App\Constants;
use App\Models\Type;
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
        Schema::create(Constants::AR_TABLES['types'], function (Blueprint $table) {
            $table->id();
            $table->string(Type::AR_FIELDS['name']);
            $table->string(Type::AR_FIELDS['plural_name']);
            $table->text(Type::AR_FIELDS['description'])->nullable();
            $table->integer(Constants::SORT_FIELD)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Constants::AR_TABLES['types']);
    }
};
