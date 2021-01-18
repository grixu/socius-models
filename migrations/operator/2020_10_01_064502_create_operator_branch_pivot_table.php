<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorBranchPivotTable extends Migration
{
    public function up()
    {
        Schema::create('operator_branch', function (Blueprint $table) {
            $table->id();
            $table->foreignId('operatorId')->constrained()->cascadeOnDelete();
            $table->foreignId('branchId')->constrained()->cascadeOnDelete();
            $table->timestamp('createdAt', 0)->nullable();
            $table->timestamp('updatedAt', 0)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('operator_branch');
    }
}
