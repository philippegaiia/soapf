<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formula_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formula_id')->constrained();
            $table->foreignId('ingredient_id')->constrained();
            $table->float('percentoils_dip',6,3);
            $table->float('percentoils_real',6,3);
            $table->float('percenttotal_dip',6,3);
            $table->float('percenttotal_real',6,3);
            $table->boolean('organic');
            $table->smallInteger('phase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formula_items');
    }
}
