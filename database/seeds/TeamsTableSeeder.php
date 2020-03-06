<?php

use App\Team;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        Team::create(array(
            'name'=>'Team One',
            'slug'=>str_slug('team One','_'),
            'url_logo'=>public_path('/images/logos').'/'.'team'.$faker->randomElement(array(2,4,6)).'.jpg',
            'logo'=>'team1.png',
            'slogan'=>$faker->realText(rand(10,30)),
            'location'=>$faker->name(rand(10,30)),
            'biography'=>$faker->paragraph(9,3),
        ));

        Team::create(array(
            'name'=>'Team Two',
            'slug'=>str_slug('team Two','_'),
            'url_logo'=>public_path('/images/logos').'/'.'team'.$faker->randomElement(array(1,2,3,4)).'.jpg',
            'logo'=>'team4.jpg',
            'slogan'=>$faker->realText(rand(10,30)),
            'location'=>$faker->name(rand(10,30)),
            'biography'=>$faker->paragraph(9,3),
        ));

        Team::create(array(
            'name'=>'Team Three',
            'slug'=>str_slug('team Three','_'),
            'url_logo'=>public_path('/images/logos').'/'.'team'.$faker->randomElement(array(1,2,3,4)).'.jpg',
            'logo'=>'team4.jpg',
            'slogan'=>$faker->realText(rand(10,30)),
            'location'=>$faker->name(rand(10,30)),
            'biography'=>$faker->paragraph(9,3),
        ));

        Team::create(array(
            'name'=>'Team Four',
            'slug'=>str_slug('team Four','_'),
            'url_logo'=>public_path('/images/logos').'/'.'team'.$faker->randomElement(array(1,2,3,4)).'.jpg',
            'logo'=>'team2.jpeg',
            'slogan'=>$faker->realText(rand(10,30)),
            'location'=>$faker->name(rand(10,30)),
            'biography'=>$faker->paragraph(9,3),
        ));

        Team::create(array(
            'name'=>'Team Five',
            'slug'=>str_slug('team Five','_'),
            'url_logo'=>public_path('/images/logos').'/'.'team'.$faker->randomElement(array(1,2,3,4)).'.jpg',
            'logo'=>'team3.jpg',
            'slogan'=>$faker->realText(rand(10,30)),
            'location'=>$faker->name(rand(10,30)),
            'biography'=>$faker->paragraph(9,3),
        ));

        Team::create(array(
            'name'=>'Team Six',
            'slug'=>str_slug('team Six','_'),
            'url_logo'=>public_path('/images/logos').'/'.'team'.$faker->randomElement(array(1,2,3,4)).'.jpg',
            'logo'=>'team4.jpg',
            'slogan'=>$faker->realText(rand(10,30)),
            'location'=>$faker->name(rand(10,30)),
            'biography'=>$faker->paragraph(9,3),
        ));
    }


}
