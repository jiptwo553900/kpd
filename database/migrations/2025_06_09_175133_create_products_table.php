<?php

use App\Constants;
use App\Models\Product;
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
        Schema::create(Constants::AR_TABLES['products'], function (Blueprint $table) {
            $table->id();
            $table->string(Product::AR_FIELDS['name']);
            $table->string(Product::AR_FIELDS['img'])->nullable();
            $table->string(Product::AR_FIELDS['kit'])->nullable();
            $table->text(Product::AR_FIELDS['description'])->nullable();
            $table->json(Product::AR_FIELDS['specs'])->nullable();
            $table->float(Product::AR_FIELDS['price'])->nullable();
            $table->float(Product::AR_FIELDS['guarantee'])->nullable();
            $table->boolean(Product::AR_FIELDS['only_legals'])->default(false);
            $table->foreignId(Product::AR_FIELDS['subtype_id'])
                ->constrained(Constants::AR_TABLES['subtypes'])
                ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Constants::AR_TABLES['products']);
    }
};
