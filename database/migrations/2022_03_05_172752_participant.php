<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Participant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("participants",function(Blueprint $table){
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("JE_Name");
            $table->integer("Round_Number");
            $table->string("Code_Post");
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
        //
    }
}
