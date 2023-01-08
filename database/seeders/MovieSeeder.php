<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['movieName' => 'AVATAR: THE WAY OF WATER',
            'movieRating' => 'R13+',
            'movieFormat' => '2D',
            'status' => 1],

            ['movieName' => 'I WANNA DANCE WITH SOMEBODY',
            'movieRating' => 'R13+',
            'movieFormat' => '2D',
            'status' => 1],

            ['movieName' => 'PUSS IN BOOTS: THE LAST WISH',
            'movieRating' => 'SU',
            'movieFormat' => '2D',
            'status' => 1],

            ['movieName' => 'THE MENU',
            'movieRating' => 'D17+',
            'movieFormat' => '2D',
            'status' => 1],

            ['movieName' => 'BLACK PANTHER: WAKANDA FOREVER',
            'movieRating' => 'SU',
            'movieFormat' => '2D',
            'status' => 1],

            ['movieName' => 'BLACK PANTHER: WAKANDA FOREVER',
            'movieRating' => 'SU',
            'movieFormat' => '3D',
            'status' => 1],

            ['movieName' => 'A MAN CALLED OTTO',
            'movieRating' => 'R13+',
            'movieFormat' => '2D',
            'status' => 0],

            ['movieName' => 'MINDCAGE',
            'movieRating' => 'D17+',
            'movieFormat' => '2D',
            'status' => 0],

            ['movieName' => 'THE BANISHING',
            'movieRating' => 'D17+',
            'movieFormat' => '2D',
            'status' => 0],
        ]);
    }
}
