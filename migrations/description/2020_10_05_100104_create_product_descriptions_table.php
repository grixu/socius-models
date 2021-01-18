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
                $table->foreignId('productId')->constrained('products');
            }
            $table->foreignId('languageId')->constrained('language');
            $table->text('pageTitle')->nullable();
            $table->text('keywords')->nullable();
            $table->text('shortDesc')->nullable();
            $table->text('metaDesc')->nullable();
            $table->string('url')->nullable();
            $table->dateTime('lastModification')->nullable();
            $table->dateTime('lastModificationDesc')->nullable();
            $table->string('xlId', 100)->index();
            $table->dateTime('syncTs');
            if (!empty(config('socius-models.md5_local_model_field'))) {
                $table->string(config('socius-models.md5_local_model_field'))->nullable();
            }
            $table->timestamp('createdAt', 0)->nullable();
            $table->timestamp('updatedAt', 0)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_descriptions');
    }
}
