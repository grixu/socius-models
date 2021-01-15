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
            $table->string('measure_unit', 5);
            $table->string('tax_group', 1);
            $table->unsignedSmallInteger('tax_value');
            $table->double('weight', 10, 5)->nullable();
            $table->boolean('blocked')->default(false);
            $table->boolean('archived')->default(false);
            $table->boolean('eshop')->default(false);
            $table->boolean('availability')->default(false);
            $table->boolean('attachments')->default(false);
            $table->dateTime('sync_ts');
            $table->unsignedBigInteger('xl_id');
            $table->foreignId('brand_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('product_type_id')->nullable()->constrained()->nullOnDelete();
            $table->double('price', 10,2)->nullable();
            $table->dateTime('price_updated')->nullable();
            $table->double('eshop_price', 10,2)->nullable();
            $table->unsignedInteger('flags')->nullable();
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
