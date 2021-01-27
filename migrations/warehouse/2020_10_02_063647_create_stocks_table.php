<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->foreignId('warehouseId')->nullable()->constrained('warehouses');
            if (Schema::hasTable('products')) {
                $table->foreignId('productId')->nullable()->constrained('products');
            } else {
                $table->foreignId('productId')->nullable();
            }
            $table->dateTime('receptionDate');
            $table->dateTime('syncTs');
            $table->string('xlId', 100)->index();
            if (!empty(config('socius-models.checksum_field'))) {
                $table->string(config('socius-models.checksum_field'))->nullable();
            }
            $table->timestamp('createdAt', 0)->nullable();
            $table->timestamp('updatedAt', 0)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
