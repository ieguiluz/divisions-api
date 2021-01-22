<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('level');
            $table->integer('colaborators_qty');
            $table->string('ambassador')->nullable();
            $table->timestamps();

            $table->unique('name');
            $table->foreign('parent_id')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions', function (Blueprint $table) {
            dropForeign(['parent_id']);
        });
    }
}
