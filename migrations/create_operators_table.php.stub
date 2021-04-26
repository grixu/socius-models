<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorsTable extends Migration
{
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('xlUsername');
            $table->string('email');
            $table->foreignId('operatorRoleId')->nullable()->constrained('operator_roles')->nullOnDelete();
            $table->unsignedBigInteger('xlId');
            $table->dateTime('syncTs');
            if (!empty(config('socius-models.checksum_field'))) {
                $table->string(config('socius-models.checksum_field'))->nullable();
            }
            $table->timestamp('createdAt', 0)->nullable();
            $table->timestamp('updatedAt', 0)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('operators');
    }
}
