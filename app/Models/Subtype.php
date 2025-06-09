<?php

namespace App\Models;

use App\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class Subtype extends Model
{
    use AsSource, HasFactory, Filterable, Sortable;

    const AR_FIELDS = [
        'name' => 'name',
        'type_id' => 'type_id',
    ];

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
