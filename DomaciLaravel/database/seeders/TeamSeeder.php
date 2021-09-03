<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'id'=>1,
            'TeamName'=>'Partizan',
            'City'=>'Belgrade',
            'Rank'=>1,
            'Wins'=>10,
            'Coach'=>'Zeljko Obradovic'

        ]);
        DB::table('teams')->insert([
            'id'=>2,
            'TeamName'=>'Red Star',
            'City'=>'Belgrade',
            'Rank'=>2,
            'Wins'=>8,
            'Coach'=>'Dejan Radonjic'

        ]);
        DB::table('teams')->insert([
            'id'=>3,
            'TeamName'=>'Radnicki',
            'City'=>'Kragujevac',
            'Rank'=>3,
            'Wins'=>4,
            'Coach'=>'Muta Nikolic'

        ]);
    }
}
