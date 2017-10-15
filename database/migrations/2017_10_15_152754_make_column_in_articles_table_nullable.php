<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeColumnInArticlesTableNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->dropColumn('content');
            $table->dropColumn('featured_image');
        });

        Schema::table('articles', function(Blueprint $table) {
            $table->text('content')->nullable();
            $table->string('featured_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->dropColumn('content');
            $table->dropColumn('featured_image');
        });
        
        Schema::table('articles', function(Blueprint $table) {
            $table->text('content');
            $table->string('featured_image');
        });
    }
}
