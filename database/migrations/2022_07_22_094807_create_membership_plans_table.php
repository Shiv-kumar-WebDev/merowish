<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_plans', function (Blueprint $table) {
            $table->increments('id_membership_plan');
            $table->integer('id_product');
            $table->integer('id_customer_group');
            $table->integer('id_currency');
            $table->string('features');
            $table->string('name');
            $table->string('type');
            $table->string('duration');
            $table->string('img_name');
            $table->integer('allow_renew');
            $table->integer('allow_extend');
            $table->integer('active');
            $table->float('price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_plans');
    }
}
