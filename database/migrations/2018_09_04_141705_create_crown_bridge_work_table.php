<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrownBridgeWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crown_bridge_work', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('models_tech')->nullable();
            $table->foreign('models_tech')->references('id')->on('staff');
            $table->integer('models_units')->nullable();

            $table->unsignedInteger('trim_die_tech')->nullable();
            $table->foreign('trim_die_tech')->references('id')->on('staff');
            $table->integer('trim_die_units')->nullable();

            $table->unsignedInteger('articulate_tech')->nullable();
            $table->foreign('articulate_tech')->references('id')->on('staff');
            $table->integer('articulate_units')->nullable();

            $table->unsignedInteger('scan_tech')->nullable();
            $table->foreign('scan_tech')->references('id')->on('staff');
            $table->integer('scan_units')->nullable();

            $table->unsignedInteger('gold_work_tech')->nullable();
            $table->foreign('gold_work_tech')->references('id')->on('staff');
            $table->integer('gold_work_units')->nullable();

            $table->unsignedInteger('foil_and_core_tech')->nullable();
            $table->foreign('foil_and_core_tech')->references('id')->on('staff');
            $table->integer('foil_and_core_units')->nullable();

            $table->unsignedInteger('opaque_tech')->nullable();
            $table->foreign('opaque_tech')->references('id')->on('staff');
            $table->integer('opaque_units')->nullable();

            $table->unsignedInteger('build_up_tech')->nullable();
            $table->foreign('build_up_tech')->references('id')->on('staff');
            $table->integer('build_up_units')->nullable();

            $table->unsignedInteger('stone/grind_in_tech')->nullable();
            $table->foreign('stone/grind_in_tech')->references('id')->on('staff');
            $table->integer('stone/grind_in_units')->nullable();

            $table->unsignedInteger('glaze_tech')->nullable();
            $table->foreign('glaze_tech')->references('id')->on('staff');
            $table->integer('glaze_units')->nullable();

            $table->unsignedInteger('fit_tech')->nullable();
            $table->foreign('fit_tech')->references('id')->on('staff');
            $table->integer('fit_units')->nullable();

            $table->unsignedInteger('other_tech')->nullable();
            $table->foreign('other_tech')->references('id')->on('staff');
            $table->integer('other_units')->nullable();

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
        Schema::dropIfExists('crown_bridge_work');
    }
}
