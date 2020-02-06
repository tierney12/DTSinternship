<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoSentToDentistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_sent_to_dentists', function (Blueprint $table) {
            $table->increments('id');
            //$table->primary('Info_sent_id');

            $table->unsignedInteger('dentist_id');
            $table->foreign('dentist_id')->references('id')->on('dentists');

            $table->dateTime('date');

            $table->text('info_sent');

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
        Schema::dropIfExists('info_sent_to_dentists');
    }
}
