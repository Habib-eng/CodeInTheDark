<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class database_test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            "Post_Number" => 0,
            "Round_Number" => 1,
            "Path_File" => "/testpath"
        ]);
    }
}
