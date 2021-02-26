<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderElementsTable extends Migration
{
    public function up()
    {
        Schema::create('order_elements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('xlId');
            $table->foreignId('orderId')->constrained('orders');
            $table->decimal('amount', 15, 5);
            $table->timestamp('sentAt', 0)->nullable();
            $table->timestamp('receivedAt', 0)->nullable();
            $table->text('receivedDetailedStatus')->nullable();
            $table->string('productIndex', 50);

            if (Schema::hasTable('products')) {
                $table->foreignId('productId')->nullable()->constrained('products');
            } else {
                $table->foreignId('productId')->nullable();
            }

            if (Schema::hasTable('warehouses')) {
                $table->foreignId('warehouseId')->nullable()->constrained('warehouses');
            } else {
                $table->foreignId('warehouseId')->nullable();
            }

            if (!empty(config('socius-models.checksum_field'))) {
                $table->string(config('socius-models.checksum_field'))->nullable();
            }
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_elements');
    }
}
