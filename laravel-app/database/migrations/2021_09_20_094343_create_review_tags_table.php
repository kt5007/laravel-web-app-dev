<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_tags', function (Blueprint $table) {
            $table->bigInteger('review_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->unique(['review_id','tag_id'],'UNIQUE_IDX_REVIEW_TAGS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_tags');
    }
}
