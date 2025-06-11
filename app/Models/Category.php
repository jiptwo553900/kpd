<?php

namespace App\Models;

use App\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Orchid\Filters\Filterable;
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use AsSource, HasFactory, Filterable, Sortable;

    const AR_FIELDS = [
        'name' => 'name',
        'sort' => Constants::SORT_FIELD,
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

    public function types(): BelongsToMany
    {
        return $this->belongsToMany(Type::class, Constants::AR_TABLES['type_categories']);
    }
}
