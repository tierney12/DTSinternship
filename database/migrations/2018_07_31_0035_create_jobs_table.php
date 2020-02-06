<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('dentist_id');
            $table->foreign('dentist_id')->references('id')->on('dentists');

            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');

            $table->string('patient_name');

            $table->dateTime('date_in');

            $table->dateTime('date_due_out');

            $table->dateTime('date_dispatched');

            $table->text('special_instructions');

            $table->string('shade');

            $table->integer('impressions');

            $table->integer('models')->nullable();

            $table->boolean('estimate');

            $table->boolean('bites');

            $table->string('others');

            $table->boolean('remake');

            $table->boolean('invoiced');

            $table->unsignedInteger('remake_reason_id')->nullable();
            $table->foreign('remake_reason_id')->references('id')->on('remake_reasons');

            $table->dateTime('remake_date')->nullable();

            $table->unsignedInteger('remake_original_ref')->nullable();
            $table->foreign('remake_original_ref')->references('id')->on('jobs');

            $table->string('job_no');

            $table->string('signed_for_by')->nullable();

            $table->dateTime('delivery_date')->nullable();

            $table->unsignedInteger('job_layout_id')->nullable();
            $table->foreign('job_layout_id')->references('id')->on('job_layouts');

            $table->unsignedInteger('nominal_code_id');
            $table->foreign('nominal_code_id')->references('id')->on('nominal_codes');

            $table->boolean('price_fixed');

            $table->unsignedInteger('lab_sheet_id')->nullable();
            $table->foreign('lab_sheet_id')->references('id')->on('lab_sheets');

            $table->boolean('input_error');

            $table->unsignedInteger('job_error_ref')->nullable();
            $table->foreign('job_error_ref')->references('id')->on('jobs');


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
        Schema::dropIfExists('jobs');
    }
}
