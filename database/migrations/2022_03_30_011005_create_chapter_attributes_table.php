<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapterAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_attributes', function (Blueprint $table) {
            $table->id();

            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->string('chapter_keywords')->nullable();
            $table->string('chapter_type')->nullable(); //manual, article, dfy
            $table->string('url')->nullable();
            $table->longText('chapter_title');
            $table->longText('slug')->nullable();
            $table->longText('chapter_description');

            $table->unsignedBigInteger('ebook_id');

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
        Schema::dropIfExists('chapter_attributes');
    }
}
