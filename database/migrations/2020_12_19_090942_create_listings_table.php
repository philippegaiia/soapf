<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ingredient_id')->constrained();
            $table->foreignId('supplier_id')->constrained();
            $table->string('code')->nullable();
            $table->string('supplier_ref')->nullable();
            $table->string('name');
            $table->smallInteger('pkg');
            $table->float('unit_weight', 8, 3);
            $table->boolean('organic')->default(true);
            $table->boolean('fairtrade')->default(false);
            $table->boolean('cosmos')->default(false);
            $table->smallInteger('active');
            $table->text('infos')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('listings');
    }
}
