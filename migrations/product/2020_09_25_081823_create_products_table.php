<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('index', 50);
            $table->string('ean', 40);
            $table->string('measureUnit', 5);
            $table->string('taxGroup', 1);
            $table->unsignedSmallInteger('taxValue');
            $table->double('weight', 10, 5)->nullable();
            $table->boolean('blocked')->default(false);
            $table->boolean('archived')->default(false);
            $table->boolean('eshop')->default(false);
            $table->boolean('availability')->default(false);
            $table->boolean('attachments')->default(false);
            $table->dateTime('syncTs');
            $table->unsignedBigInteger('xlId');
            if (Schema::hasTable('operators')) {
                $table->foreignId('operatorId')->nullable()->constrained('operators')->nullOnDelete();
            } else {
                $table->foreignId('operatorId')->nullable();
            }
            $table->foreignId('brandId')->nullable()->constrained('brands')->nullOnDelete();
            $table->foreignId('categoryId')->nullable()->constrained('category')->nullOnDelete();
            $table->foreignId('productTypeId')->nullable()->constrained('product_types')->nullOnDelete();
            $table->double('price', 10,2)->nullable();
            $table->dateTime('priceUpdated')->nullable();
            $table->double('eshopPrice', 10,2)->nullable();
            $table->unsignedInteger('flags')->nullable();
            if (!empty(config('socius-models.checksum_field'))) {
                $table->string(config('socius-models.checksum_field'))->nullable();
            }
            $table->timestamp('createdAt', 0)->nullable();
            $table->timestamp('updatedAt', 0)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
