<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //WIP CHECK LINES 114

    public function up()
    {
        Schema::create('dentists', function (Blueprint $table) {
            $table->increments('id');
            //$table->primary('Dentist_id');

            $table->string('account_number');

            $table->dateTime('customer_since');

            $table->boolean('active');

            $table->boolean('mailing_list_opt_in');

            $table->string('title', 50);

            $table->string('firstname', 50);

            $table->string('surname', 50);

            $table->string('phone_number', 20);

            $table->string('mobile_number', 20);
            //new table added per requirements

            $table->boolean('vocational_training');

            $table->boolean('essential_account');

            $table->text('preferences');

            $table->integer('recall_month');

            $table->string('email', 100);

            $table->string('gdc_number');

            $table->unsignedInteger('practice_id');
            $table->foreign('practice_id')->references('id')->on('practices');

            $table->unsignedInteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses');

            $table->unsignedInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');

            $table->unsignedInteger('dentist_status_id');
            $table->foreign('dentist_status_id')->references('id')->on('dentist_statuses');

            $table->unsignedInteger('priceband_id');
            $table->foreign('priceband_id')->references('id')->on('pricebands');


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
        Schema::dropIfExists('dentists');
    }
}
