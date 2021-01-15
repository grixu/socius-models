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
            $table->foreignId('warehouse_id')->constrained();
            if (Schema::hasTable('products')) {
                $table->foreignId('product_id')->constrained();
            }
            $table->dateTime('reception_date');
            $table->dateTime('sync_ts');
            $table->string('xl_id', 100)->index();
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
