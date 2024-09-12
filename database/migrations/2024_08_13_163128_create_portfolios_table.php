<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // Foreign key column
            $table->string('project_title', 300);
            $table->text('project_des');
            $table->string('project_image', 300);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('category_id')->references('id')->on('portfolio_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Drop foreign key constraint
        });

        Schema::dropIfExists('portfolios');
    }
}

