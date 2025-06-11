<?php

namespace App\Models;

use App\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Filters\Filterable;
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class Type extends Model
{
    use AsSource, HasFactory, Filterable;

    const AR_FIELDS = [
        'name' => 'name',
        'plural' => 'plural',
        'description' => 'description',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = self::AR_FIELDS;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, Constants::AR_TABLES['type_categories']);
    }

    public function subtypes(): HasMany
    {
        return $this->hasMany(Subtype::class);
    }
}
