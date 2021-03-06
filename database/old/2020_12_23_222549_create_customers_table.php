<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->string('customer_id');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->string('landmark');
            $table->string('description')->nullable();
            //$table->string('rc')->nullable();
            $table->integer('gst_tin')->nullable();
            //$table->integer('nif')->nullable();
           // $table->integer('nis')->nullable();
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
       Schema::dropIfExists('customers');
    }
}
