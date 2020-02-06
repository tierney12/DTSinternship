<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');

            $table->text('item1')->nullable();
            $table->text('item2')->nullable();
            $table->text('item3')->nullable();
            $table->text('item4')->nullable();
            $table->text('item5')->nullable();
            $table->text('item6')->nullable();
            $table->text('item7')->nullable();
            $table->text('item8')->nullable();
            $table->text('item9')->nullable();
            $table->text('item10')->nullable();
            $table->text('item11')->nullable();
            $table->text('item12')->nullable();
            $table->text('item13')->nullable();
            $table->text('item14')->nullable();
            $table->text('item15')->nullable();
            $table->text('item16')->nullable();
            $table->text('item17')->nullable();
            $table->text('item18')->nullable();
            $table->text('item19')->nullable();
            $table->text('item20')->nullable();


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
        Schema::dropIfExists('checklists');
    }
}
