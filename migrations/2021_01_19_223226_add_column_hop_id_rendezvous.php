<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnHopIdToRendezvousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rendezvous', function (Blueprint $table) {
          $table->unsignedBigInteger('hop_id');
            $table->foreign('hop_id')->references('id')->on('hopitals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rendezvous', function (Blueprint $table) {
             $table->dropColumn('hop_id');
        });
    }
}