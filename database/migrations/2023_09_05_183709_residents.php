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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('address');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('contact_number');
            $table->string('guardian_name');
            $table->string('guardian_contact_number');
            $table->string('religion');
            $table->string('occupation');
            $table->bigInteger('issuing_officer_id')->unsigned();
            $table->foreign('issuing_officer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('residents');
    }
};
