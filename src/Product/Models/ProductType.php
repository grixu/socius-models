<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Product\Factories\ProductTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $name
 * @property int $xl_id
 * @property int $id
 * @property \Illuminate\Support\Carbon $updated_at
 * @property Product $products
 */
class ProductType extends Model
{
    use HasFactory;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';

    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
    ];

    protected $dates = [
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'xl_id',
        'created_at',
        'updated_at',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(
            Product::class,
            'product_type_id',
            'id'
        );
    }

    public static function newFactory()
    {
        return ProductTypeFactory::new();
    }
}
