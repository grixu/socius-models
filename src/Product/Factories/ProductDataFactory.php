<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\SociusModels\Product\DataTransferObjects\ProductData;
use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;
use Grixu\DataFactories\Factory;

class ProductDataFactory extends Factory
{
    public static function new(): ProductDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): ProductData
    {
        return new ProductData(
            $parameters +
            [
                'name' => 'Test',
                'index' => '00000',
                'ean' => '000000',
                'measureUnit' => ProductMeasureUnitEnum::PIECE(),
                'taxGroup' => ProductVatTypeEnum::VAT23(),
                'taxValue' => 23,
                'weight' => 1.00,
                'xlId' => 1,
                'eshop' => false,
                'xlOperatorId' => 1,
                'brandId' => rand(11111,55555),
                'xlProductTypeId' => rand(11111,55555),
                'syncTs' => now(),
                'updatedAt' => now(),
                'price' => 100.50,
                'eshopPrice' => 101.50,
                'priceUpdated' => now(),
            ]
        );
    }
}
