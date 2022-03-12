<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class testparticipants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert([
            'nom' => 'Radhi',
            'prenom' => 'Hlila',
            'JE_Name' => 'Phoenix',
            'Round_Number' => '3',
            'Code_Post' => "0x235"
        ]);
        DB::table('participants')->insert([
            'nom' => 'Bazziz',
            'prenom' => 'Bechir',
            'JE_Name' => 'JEniso',
            'Round_Number' => '6',
            'Code_Post' => "0x23",
        ]);
        DB::table('participants')->insert([
            'nom' => 'Frigui',
            'prenom' => 'Firas',
            'JE_Name' => 'Ensi Junior Entreprise',
            'Round_Number' => '5',
            'Code_Post' => "0x23",
        ]);        
    }
}
