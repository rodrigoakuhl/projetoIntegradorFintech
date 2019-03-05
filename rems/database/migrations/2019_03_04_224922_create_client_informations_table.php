<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('phone_number_01')->nullable();
            $table->string('phone_number_02')->nullable();
            $table->string('city_birth')->nullable();
            $table->string('country_bith')->nullable();
            $table->string('tax_id')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('id_number')->nullable();
            $table->string('id_number_issuer')->nullable();
            $table->string('id_number_state')->nullable();
            $table->date('id_number_issue_date')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('street_name')->nullable();
            $table->integer('street_number')->nullable();
            $table->string('street_additional_information')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->integer('monthly_income')->nullable();
            $table->integer('total_assets')->nullable();
            $table->boolean('person_of_interest')->nullable();
            $table->integer('bank_number')->nullable();
            $table->integer('bank_account_type')->nullable();
            $table->integer('bank_branch_number')->nullable();
            $table->string('account_number')->nullable();

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
        Schema::dropIfExists('client_informations');
    }
}
