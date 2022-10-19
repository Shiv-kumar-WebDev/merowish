<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_customers', function (Blueprint $table) {
            $table->increments('id_membership_customer');
            $table->integer('id_plan');
            $table->integer('id_reference');
            $table->integer('id_customer');
            $table->integer('id_customer_group');
            $table->integer('id_product');
            $table->integer('id_order');
            $table->integer('id_currency');
            $table->dateTime('activated_date');
            $table->dateTime('expiry_date');
            $table->string('name');
            $table->string('type');
            $table->string('duration');
            $table->integer('is_renew');
            $table->integer('is_extended');
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
        Schema::dropIfExists('membership_customers');
    }
}
