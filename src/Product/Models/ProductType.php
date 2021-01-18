<?php

namespace Grixu\SociusModels\Product\Models;

use Grixu\SociusModels\Product\Factories\ProductTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string name
 * @property int xlId
 * @property int id
 * @property \Illuminate\Support\Carbon updatedAt
 * @property Product products
 */
class ProductType extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $timestamps = false;

    protected $casts = [
        'name' => 'string',
    ];

    protected $dates = [
        'updatedAt',
    ];

    protected $fillable = [
        'name',
        'xlId',
        'createdAt',
        'updatedAt',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(
            Product::class,
            'productTypeId',
            'id'
        );
    }

    public static function newFactory()
    {
        return ProductTypeFactory::new();
    }
}
