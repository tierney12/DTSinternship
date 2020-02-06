<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_updates', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');

            $table->unsignedInteger('job_update_item_id');
            $table->foreign('job_update_item_id')->references('id')->on('jobs');

            $table->unsignedInteger('technician_ref');
            $table->foreign('technician_ref')->references('id')->on('staff');

            $table->integer('units');

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
        Schema::dropIfExists('job_updates');
    }
}
