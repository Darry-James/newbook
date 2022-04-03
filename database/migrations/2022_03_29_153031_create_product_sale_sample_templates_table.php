<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSaleSampleTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sale_sample_templates', function (Blueprint $table) {
            $table->id();

            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();
            
            $table->string('title')->unique()->nullable();
            $table->string('thumbnail')->nullable();

            $table->text('sales_page_content')->nullable();
            $table->text('squeeze_thankyou_page')->nullable();
            $table->text('download_content_page')->default('false');

            $table->text('exit_popup_sales_page_content')->nullable();
            $table->text('exit_popup_download_page')->nullable();

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
        Schema::dropIfExists('product_sale_sample_templates');
    }
}
