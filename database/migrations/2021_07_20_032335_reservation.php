<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('medecin_id');
            $table->integer('patient_id');
            $table->timestamps();
            
            
            
        });
        
        
        Schema::table('reservation', function($table) {
        $table->foreignId('medecin')->references('id')->on('medecin')->onDelete('cascade');
        $table->foreignId('patient')->references('id')->on('patient')->onDelete('cascade');
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservation');
    }
}
 