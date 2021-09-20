<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEadModuleCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ead_modules_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eadModule_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('eadModule_id')->references('id')->on('ead_modules')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('ead_modules_categories');
    }
}
