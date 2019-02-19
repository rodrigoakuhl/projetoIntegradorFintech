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
