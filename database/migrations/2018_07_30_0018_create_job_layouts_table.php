<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_layouts', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('layout11');
            $table->boolean('layout12');
            $table->boolean('layout13');
            $table->boolean('layout14');
            $table->boolean('layout15');
            $table->boolean('layout16');
            $table->boolean('layout17');
            $table->boolean('layout18');

            $table->boolean('layout21');
            $table->boolean('layout22');
            $table->boolean('layout23');
            $table->boolean('layout24');
            $table->boolean('layout25');
            $table->boolean('layout26');
            $table->boolean('layout27');
            $table->boolean('layout28');

            $table->boolean('layout31');
            $table->boolean('layout32');
            $table->boolean('layout33');
            $table->boolean('layout34');
            $table->boolean('layout35');
            $table->boolean('layout36');
            $table->boolean('layout37');
            $table->boolean('layout38');

            $table->boolean('layout41');
            $table->boolean('layout42');
            $table->boolean('layout43');
            $table->boolean('layout44');
            $table->boolean('layout45');
            $table->boolean('layout46');
            $table->boolean('layout47');
            $table->boolean('layout48');

            $table->unsignedInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');

            $table->unsignedInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');

            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_layouts');
    }
}
