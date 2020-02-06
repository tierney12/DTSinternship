<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pros_work', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('cast_models_tech')->nullable();
            $table->foreign('cast_models_tech')->references('id')->on('staff');
            $table->integer('cast_models_units')->nullable();

            $table->unsignedInteger('special_tray_tech')->nullable();
            $table->foreign('special_tray_tech')->references('id')->on('staff');
            $table->integer('special_tray_units')->nullable();

            $table->unsignedInteger('duplicate_tech')->nullable();
            $table->foreign('duplicate_tech')->references('id')->on('staff');
            $table->integer('duplicate_units')->nullable();

            $table->unsignedInteger('record_block_tech')->nullable();
            $table->foreign('record_block_tech')->references('id')->on('staff');
            $table->integer('record_block_units')->nullable();

            $table->unsignedInteger('replica_block_tech')->nullable();
            $table->foreign('replica_block_tech')->references('id')->on('staff');
            $table->integer('replica_block_units')->nullable();

            $table->unsignedInteger('articulate_tech')->nullable();
            $table->foreign('articulate_tech')->references('id')->on('staff');
            $table->integer('articulate_units')->nullable();

            $table->unsignedInteger('design_tech')->nullable();
            $table->foreign('design_tech')->references('id')->on('staff');
            $table->integer('design_units')->nullable();

            $table->unsignedInteger('wax_up_tech')->nullable();
            $table->foreign('wax_up_tech')->references('id')->on('staff');
            $table->integer('wax_up_units')->nullable();

            $table->unsignedInteger('trial_tech')->nullable();
            $table->foreign('trial_tech')->references('id')->on('staff');
            $table->integer('trial_units')->nullable();

            $table->unsignedInteger('re_trail_tech')->nullable();
            $table->foreign('re_trail_tech')->references('id')->on('staff');
            $table->integer('re_trail_units')->nullable();

            $table->unsignedInteger('reset_finish_tech')->nullable();
            $table->foreign('reset_finish_tech')->references('id')->on('staff');
            $table->integer('reset_finish_units')->nullable();

            $table->unsignedInteger('wax_finish_tech')->nullable();
            $table->foreign('wax_finish_tech')->references('id')->on('staff');
            $table->integer('wax_finish_units')->nullable();

            $table->unsignedInteger('flask_tech')->nullable();
            $table->foreign('flask_tech')->references('id')->on('staff');
            $table->integer('flask_units')->nullable();

            $table->unsignedInteger('deflask_tech')->nullable();
            $table->foreign('deflask_tech')->references('id')->on('staff');
            $table->integer('deflask_units')->nullable();

            $table->unsignedInteger('trim_tech')->nullable();
            $table->foreign('trim_tech')->references('id')->on('staff');
            $table->integer('trim_units')->nullable();

            $table->unsignedInteger('polish_tech')->nullable();
            $table->foreign('polish_tech')->references('id')->on('staff');
            $table->integer('polish_units')->nullable();

            $table->unsignedInteger('repair_tech')->nullable();
            $table->foreign('repair_tech')->references('id')->on('staff');
            $table->integer('repair_units')->nullable();

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
        Schema::dropIfExists('pros_work');
    }
}
