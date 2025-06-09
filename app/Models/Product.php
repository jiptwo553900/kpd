<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use AsSource, HasFactory, Filterable;

    const AR_FIELDS = [
        'name' => 'name',
        'image' => 'image',
//        'gallery' => 'gallery',
//        'files' => 'files',
        'kit' => 'kit',
        'description' => 'description',
        'specs' => 'specs',
        'price' => 'price',
        'guarantee' => 'guarantee',
        'only_legals' => 'only_legals',
    ];
}
