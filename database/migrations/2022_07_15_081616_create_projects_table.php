<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->nullable();
            $table->string('title_1_az')->nullable();
            $table->string('title_1_en')->nullable();
            $table->string('title_2_az')->nullable();
            $table->string('title_2_en')->nullable();
            $table->text('text_az')->nullable();
            $table->text('text_en')->nullable();
            $table->string('release_date_az')->nullable();
            $table->string('release_date_en')->nullable();
            $table->string('client_az')->nullable();
            $table->string('client_en')->nullable();
            $table->string('art_director_az')->nullable();
            $table->string('art_director_en')->nullable();
            $table->string('designer_az')->nullable();
            $table->string('designer_en')->nullable();
            $table->string('copyrighter_az')->nullable();
            $table->string('copyrighter_en')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
