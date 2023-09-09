<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        $data = [
            [
                'name' => 'punong_barangay',
                'description' => 'Punong Barangay'
            ],
            [
                'name' => 'kagawad',
                'description' => 'Kagawad'
            ],
            [
                'name' => 'midwife',
                'description' => 'Midwife'
            ],
            [
                'name' => 'bhw',
                'description' => 'BHW'
            ],
            [
                'name' => 'ex_o',
                'description' => 'Ex-O'
            ],
            [
                'name' => 'staff',
                'description' => 'Barangay Staff'
            ]
        ];
        foreach ($data as $row) {
            # code...
            DB::table('positions')->insert($row);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
