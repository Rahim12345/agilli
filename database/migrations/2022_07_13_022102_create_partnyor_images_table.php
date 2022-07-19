<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnyorImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partnyor_images', function (Blueprint $table) {
            $table->id();
            $table->string('src')->nullable();
            $table->string('alt_az')->nullable();
            $table->string('alt_en')->nullable();
            $table->tinyInteger('type')->default(1)->comment('1 - partnyor, 2 - team');
            $table->integer('order_no')->default(0);
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
        Schema::dropIfExists('partnyor_images');
    }
}
