<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mains', function (Blueprint $table) {
            $table->id();

            $table->text('title');
            $table->text('title_small');
            $table->text('button_text');
            $table->text('button_link');
            $table->text('image');

            $table->text('features_icon1');
            $table->text('features_title1');
            $table->text('features_description1');

            $table->text('features_icon2');
            $table->text('features_title2');
            $table->text('features_description2');

            $table->text('features_icon3');
            $table->text('features_title3');
            $table->text('features_description3');


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
        Schema::dropIfExists('mains');
    }
}
