<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->nullable();
            $table->string('cover_alt_az')->nullable();
            $table->string('cover_alt_en')->nullable();
            $table->string('title_az')->nullable();
            $table->string('title_en')->nullable();
            $table->string('slug_az')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('author_az')->nullable();
            $table->string('author_en')->nullable();
            $table->string('release_date_az')->nullable();
            $table->string('release_date_en')->nullable();
            $table->text('text_1_az')->nullable();
            $table->text('text_1_en')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_1_alt_az')->nullable();
            $table->string('image_1_alt_en')->nullable();
            $table->text('text_2_az')->nullable();
            $table->text('text_2_en')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_2_alt_az')->nullable();
            $table->string('image_2_alt_en')->nullable();
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
        Schema::dropIfExists('news');
    }
}
