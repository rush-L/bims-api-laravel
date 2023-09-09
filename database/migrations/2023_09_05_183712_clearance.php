<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('clearance', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resident_id')->unsigned();
            $table->date('date_created');
            $table->date('valid_until');
            $table->bigInteger('issuing_officer_id')->unsigned();
            $table->string('remarks');
            $table->string('purpose');
            $table->foreign('issuing_officer_id')->references('id')->on('users');
            $table->foreign('resident_id')->references('id')->on('residents');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('clearance');
    }
};
