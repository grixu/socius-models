<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseTable extends Migration
{
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->boolean('internal');
            $table->string('locked');
            $table->string('country');
            $table->dateTime('stock_counting_date')->nullable();
            $table->boolean('stock_counting');
            $table->dateTime('sync_ts');
            $table->dateTime('last_modification')->nullable();
            if (Schema::hasTable('customers')) {
                $table->foreignId('customer_id')->constrained();
            }
            if (Schema::hasTable('operators')) {
                $table->foreignId('operator_id')->nullable()->constrained();
            }
            $table->unsignedBigInteger('xl_id');
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
