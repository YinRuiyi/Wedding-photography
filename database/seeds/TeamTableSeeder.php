<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $data = [];
        for ($i=0; $i < 50; $i++) { 
        	$d = [];
        	$d['membername'] = str_random(10);
        	$d['concept'] = str_random(10);
        	$d['profile'] = str_random(20);
        	$d['photo'] = $faker->imageUrl(250,250);
        	$d['position'] = '北京';
        	$d['region'] = '首席摄影师';
        	$d['status'] = 1;
        	$data[] =$d; 
        }
        DB::table('team')->insert($data);
    }
}
