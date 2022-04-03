<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleSelectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_selects', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->string('ebook_type')->nullable(); //artible, manual, dfy etc
            $table->string('keywords')->nullable();
            $table->longText('title')->nullable();
            $table->string('author')->nullable();
            $table->longText('description')->nullable();
            $table->string('is_updated')->default('false'); //checks if it has been changed in pagebuilder

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
        Schema::dropIfExists('article_selects');
    }
}
