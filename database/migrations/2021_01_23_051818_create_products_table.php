<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_subcategory_id')->constrained();
            $table->foreignId('product_collection_id')->constrained();
            $table->string('code');
            $table->string('name');
            $table->boolean('essential_ois');
            $table->boolean('extracts');
            $table->float('dry_weight',7,3);
            $table->float('wet_weight',7,3);
            $table->smallInteger('active');
            $table->string('ean')->nullable();
            $table->string('wpcode')->nullable();
            $table->text('comments')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        // Artisan::call('db:seed', [
        //     '--class' => ProductSeeder::class
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
