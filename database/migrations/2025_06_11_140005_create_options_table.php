<?php

use App\Constants;
use App\Models\Option;
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
        Schema::create(Constants::AR_TABLES['options'], function (Blueprint $table) {
            $table->id();
            $table->string(Option::AR_FIELDS['code'])->unique();
            $table->text(Option::AR_FIELDS['value'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Constants::AR_TABLES['options']);
    }
};
