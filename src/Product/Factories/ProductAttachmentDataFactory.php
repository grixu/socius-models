<?php

namespace Grixu\SociusModels\Product\Factories;

use Grixu\DataFactories\Factory;
use Grixu\SociusModels\Product\DataTransferObjects\ProductData;
use Grixu\SociusModels\Product\Enums\ProductMeasureUnitEnum;
use Grixu\SociusModels\Product\Enums\ProductVatTypeEnum;

class ProductAttachmentDataFactory extends Factory
{
    public static function new(): ProductAttachmentDataFactory
    {
        return new self();
    }

    public function create(array $parameters = []): ProductData
    {
        return new ProductData(
            $parameters
            + [
                'name' => 'Test',
                'index' => '00000',
                'ean' => '000000',
                'measureUnit' => ProductMeasureUnitEnum::PIECE(),
                'taxGroup' => ProductVatTypeEnum::VAT23(),
                'taxValue' => 23,
                'weight' => 1.00,
                'xlId' => rand(1, 100000000),
                'eshop' => false,
                'syncTs' => now(),
                'updatedAt' => now(),
                'price' => 100.50,
                'eshopPrice' => 101.50,
                'priceUpdated' => now(),
            ]
        );
    }
}
