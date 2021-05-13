<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserAdressAndPersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('genre')->nullable();
            $table->string('document')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('cover')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('telephone')->nullable();
            $table->string('cell')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {


            $table->dropColumn('genre');
            $table->dropColumn('document');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('cover');
            $table->dropColumn('zipcode');
            $table->dropColumn('street');
            $table->dropColumn('number');
            $table->dropColumn('complement');
            $table->dropColumn('neighborhood');
            $table->dropColumn('state');
            $table->dropColumn('cell');
            $table->dropColumn('telephone');
            $table->dropColumn('city');

        });
    }
}
