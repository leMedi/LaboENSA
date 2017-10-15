<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('featured_image');

            $table->integer('author')->unsigned();
            $table->foreign('author')->references('id')->on('users')->onDelete('CASCADE');

            $table->enum('status', [
                'draft', // not published by the user yet 
                'pending', // published but the admin didn't approve it yet
                'published',
            ])->default('draft');
            
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
        Schema::dropIfExists('articles');
    }
}
