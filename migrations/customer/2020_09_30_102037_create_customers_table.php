<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('postalCode');
            $table->string('city');
            $table->string('vatNumber');
            $table->string('street');
            $table->string('voivodeship');
            $table->string('district');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->unsignedInteger('paymentPeriod');
            $table->unsignedBigInteger('xlId');
            $table->dateTime('syncTs');
            if (Schema::hasTable('operators')) {
                $table->foreignId('operatorId')->nullable()->constrained()->nullOnDelete();
            }
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamp('createdAt', 0)->nullable();
            $table->timestamp('updatedAt', 0)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
