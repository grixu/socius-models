<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDescriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('product_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc')->nullable();
            if (Schema::hasTable('products')) {
                $table->foreignId('product_id')->constrained();
            }
            $table->foreignId('language_id')->constrained();
            $table->text('page_title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('meta_desc')->nullable();
            $table->string('url')->nullable();
            $table->dateTime('last_modification')->nullable();
            $table->dateTime('last_modification_desc')->nullable();
            $table->string('xl_id', 100)->index();
            $table->dateTime('sync_ts');
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_descriptions');
    }
}
