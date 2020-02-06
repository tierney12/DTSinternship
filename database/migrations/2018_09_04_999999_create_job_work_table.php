<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_work', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');

            $table->unsignedInteger('pros_work_id')->nullable();
            $table->foreign('pros_work_id')->references('id')->on('pros_work');

            $table->unsignedInteger('crown_bridge_work_id')->nullable();
            $table->foreign('crown_bridge_work_id')->references('id')->on('crown_bridge_work');

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
        Schema::dropIfExists('job_work');
    }
}
