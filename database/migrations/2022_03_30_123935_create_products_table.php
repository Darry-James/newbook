<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->unsignedBigInteger('ebook_id')->nullable();
            $table->string('price')->nullable();
            
            $table->string('is_sales_page_enabled')->default('false');
            $table->text('sales_page_content')->nullable();
            $table->text('squeeze_thankyou_page')->nullable();
            $table->text('download_content_page')->default('false');

            $table->string('is_exit_popup_page_enabled')->default('false');
            $table->text('exit_popup_sales_page_content')->nullable();
            $table->text('exit_popup_download_page')->nullable();

            $table->unsignedBigInteger('funnel_id')->nullable();

            $table->string('status')->default('true');
            $table->softDeletes('deleted_at', 6)->nullable();
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
        Schema::dropIfExists('products');
    }
}
