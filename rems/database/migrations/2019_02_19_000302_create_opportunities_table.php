<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->string('rate');
            $table->decimal('requested_amount', 11, 2);
            $table->decimal('return_rate', 6, 2);
            $table->decimal('funding_completed', 6, 2);
            $table->date('date_end');
            $table->integer('duration');
            $table->decimal('guarantee_percent', 6 , 2);
            $table->string('company_name');
            $table->string('loan_reason');
            $table->string('company_web_page');
            $table->string('company_responsible');
            $table->longText('company_description');
            $table->string('street_name');
            $table->string('zip_code');
            $table->string('street_additional_information');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('street_number');
            $table->string('company_tax_id');
            $table->integer('number_investors');
            $table->integer('number_employees');
            $table->decimal('company_revenue', 30, 2);
            $table->decimal('company_monthly_net_profit', 30, 2);
            $table->decimal('company_debt', 30, 2);
            $table->date('fundation_year');
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
        Schema::dropIfExists('opportunities');
    }
}
