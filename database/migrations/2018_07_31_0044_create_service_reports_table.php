<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_reports', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('dentist_id');
            $table->foreign('dentist_id')->references('id')->on('dentists');

            $table->unsignedInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');

            $table->text('description');

            $table->unsignedInteger('service_report_issue_id');
            $table->foreign('service_report_issue_id')->references('id')->on('service_report_issues');

            $table->text('root_cause');

            $table->text('resolution');

            $table->text('tech_resolution');

            $table->unsignedInteger('tech_ref');
            $table->foreign('tech_ref')->references('id')->on('staff');

            $table->unsignedInteger('cancelling_tech_ref');
            $table->foreign('cancelling_tech_ref')->references('id')->on('staff');

            $table->unsignedInteger('report_to');
            $table->foreign('report_to')->references('id')->on('service_report_recipient_descriptions');



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
        Schema::dropIfExists('service_reports');
    }
}
