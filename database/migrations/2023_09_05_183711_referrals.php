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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('resident_id')->unsigned();
            $table->date('date_created');
            $table->date('date_modified');
            $table->string('hcGGGID');
            $table->string('philhealth_id');
            $table->string('philhealth_cat');
            $table->string('reasonForReferral');
            $table->date('valid_until');
            $table->bigInteger('issuing_officer_id')->unsigned();
            $table->foreign('resident_id')->references('id')->on('residents');
            $table->foreign('issuing_officer_id')->references('id')->on('users');
            
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('referrals');
    }
};
