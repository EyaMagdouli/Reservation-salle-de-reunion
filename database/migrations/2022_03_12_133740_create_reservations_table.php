<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('reservations');
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('salle_id');
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
            $table->boolean('isApproved');
            $table->timestamps();

        });


            Schema::table('reservations' , function (Blueprint $table) {
                $table->SoftDeletes();
        });


    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
