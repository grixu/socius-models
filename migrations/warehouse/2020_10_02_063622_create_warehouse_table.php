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
            $table->dateTime('stockCountingDate')->nullable();
            $table->boolean('stockCounting');
            $table->dateTime('syncTs');
            $table->dateTime('lastModification')->nullable();
            if (Schema::hasTable('customers')) {
                $table->foreignId('customerId')->constrained();
            }
            if (Schema::hasTable('operators')) {
                $table->foreignId('operatorId')->nullable()->constrained();
            }
            $table->unsignedBigInteger('xlId');
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamp('createdAt', 0)->nullable();
            $table->timestamp('updatedAt', 0)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
