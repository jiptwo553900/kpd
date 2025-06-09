<?php

namespace App\Models;

use App\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use AsSource, HasFactory, Filterable, Attachable, Sortable;

    const AR_FIELDS = [
        'name' => 'name',
        'img' => 'img',
        'kit' => 'kit',
        'description' => 'description',
        'specs' => 'specs',
        'price' => 'price',
        'guarantee' => 'guarantee',
        'only_legals' => 'only_legals',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        self::AR_FIELDS['specs'] => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = self::AR_FIELDS;

    /**
     * Get the column name for sorting.
     *
     * @return string
     */
    public function getSortColumnName(): string
    {
        return Constants::SORT_FIELD;
    }
}
