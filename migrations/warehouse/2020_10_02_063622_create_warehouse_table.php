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
            $table->string('country');
            $table->string('street');
            $table->string('city');
            $table->string('postCode');
            $table->string('type');
            $table->boolean('locked');
            $table->dateTime('syncTs');
            if (Schema::hasTable('customers')) {
                $table->foreignId('customerId')->nullable()->constrained('customers');
            } else {
                $table->foreignId('customerId')->nullable();
            }
            $table->unsignedBigInteger('xlId');
            if (!empty(config('socius-models.checksum_field'))) {
                $table->string(config('socius-models.checksum_field'))->nullable();
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
