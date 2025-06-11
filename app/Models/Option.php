<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Option extends Model
{
    use AsSource, HasFactory, Filterable;

    const AR_FIELDS = [
        'code' => 'code',
        'value' => 'value',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = self::AR_FIELDS;
}
