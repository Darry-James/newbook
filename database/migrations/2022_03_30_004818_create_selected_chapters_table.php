<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_chapters', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->string('chapter_type')->nullable(); //artible, manual, dfy etc
            $table->text('keywords')->nullable(); //string
            $table->longText('url')->nullable(); //if ebook is by url
            $table->longText('title')->nullable();
            $table->text('author')->nullable();
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
        Schema::dropIfExists('selected_chapters');
    }
}
