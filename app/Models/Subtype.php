<?php

namespace App\Models;

use App\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Filters\Filterable;
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class Subtype extends Model
{
    use AsSource, HasFactory, Filterable;

    const AR_FIELDS = [
        'name' => 'name',
        'type_id' => 'type_id',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = self::AR_FIELDS;

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
