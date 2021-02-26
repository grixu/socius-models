<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('xlId');
            $table->string('orderNumber');
            $table->smallInteger('receiveStatus');
            $table->timestamp('receiveCreatedAt', 0)->nullable();
            $table->timestamp('receiveUpdatedAt', 0)->nullable();
            $table->smallInteger('sendingStatus');
            $table->timestamp('sendingCreatedAt', 0)->nullable();
            $table->timestamp('sendingUpdatedAt', 0)->nullable();
            $table->text('receivedDetailedStatus')->nullable();

            if (Schema::hasTable('warehouses')) {
                $table->foreignId('warehouseId')->nullable()->constrained('warehouses');
            } else {
                $table->foreignId('warehouseId')->nullable();
            }

            if (Schema::hasTable('operators')) {
                $table->foreignId('operatorId')->nullable()->constrained('operators');
            } else {
                $table->foreignId('operatorId')->nullable();
            }

            if (!empty(config('socius-models.checksum_field'))) {
                $table->string(config('socius-models.checksum_field'))->nullable();
            }
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
