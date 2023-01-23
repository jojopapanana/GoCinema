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
            'movieDuration' => '192',
            'status' => 1,
            'picture' => 'avatar.jpg'],

            ['movieName' => 'I WANNA DANCE WITH SOMEBODY',
            'movieRating' => 'R13+',
            'movieFormat' => '2D',
            'movieDuration' => '143',
            'status' => 1,
            'picture' => 'iwdws.jpg'],

            ['movieName' => 'PUSS IN BOOTS: THE LAST WISH',
            'movieRating' => 'SU',
            'movieFormat' => '2D',
            'movieDuration' => '97',
            'status' => 1,
            'picture' => 'pussinboots.jpg'],

            ['movieName' => 'THE MENU',
            'movieRating' => 'D17+',
            'movieFormat' => '2D',
            'movieDuration' => '107',
            'status' => 1,
            'picture' => 'themenu.jpg'],

            ['movieName' => 'BLACK PANTHER: WAKANDA FOREVER',
            'movieRating' => 'SU',
            'movieFormat' => '2D',
            'movieDuration' => '161',
            'status' => 1,
            'picture' => 'blackpanther.jpg'],

            ['movieName' => 'BLACK PANTHER: WAKANDA FOREVER',
            'movieRating' => 'SU',
            'movieFormat' => '3D',
            'movieDuration' => '161',
            'status' => 1,
            'picture' => 'blackpanther.jpg'],

            ['movieName' => 'A MAN CALLED OTTO',
            'movieRating' => 'R13+',
            'movieFormat' => '2D',
            'movieDuration' => '126',
            'status' => 0,
            'picture' => 'otto.jpg'],

            ['movieName' => 'MINDCAGE',
            'movieRating' => 'D17+',
            'movieFormat' => '2D',
            'movieDuration' => '96',
            'status' => 0,
            'picture' => 'mindcage.jpg'],

            ['movieName' => 'THE BANISHING',
            'movieRating' => 'D17+',
            'movieFormat' => '2D',
            'movieDuration' => '97',
            'status' => 0,
            'picture' => 'thebanishing.jpg'],
        ]);
    }
}
