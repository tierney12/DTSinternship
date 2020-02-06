<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activityables', function (Blueprint $table) {
            $table->unsignedInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('activities');

            $table->unsignedInteger('activityable_id');
            $table->string('activityable_type');

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
        Schema::dropIfExists('activityables');
    }
}
