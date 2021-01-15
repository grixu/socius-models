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
            $table->string('postal_code');
            $table->string('city');
            $table->string('vat_number');
            $table->string('street');
            $table->string('voivodeship');
            $table->string('district');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('email')->nullable();
            $table->unsignedInteger('payment_period');
            $table->unsignedBigInteger('xl_id');
            $table->dateTime('sync_ts');
            if (Schema::hasTable('operators')) {
                $table->foreignId('operator_id')->nullable()->constrained()->nullOnDelete();
            }
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
