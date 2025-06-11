<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $arData = include('includes/data.php');

        Category::factory()
            ->sequence(fn (Sequence $sequence) => [
                Category::AR_FIELDS['name'] => $arCategories[$sequence->index],
                Category::AR_FIELDS['sort'] => $sequence->index + 1,
            ])
            ->count(count($arCategories))
            ->create();
    }
}
