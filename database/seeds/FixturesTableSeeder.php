<?php

use App\Fixture;
use App\Http\Resources\FixtureResource;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class FixturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $date = new Carbon();
        $fixtures = new Fixture();
         $fixtures->create(array(
             'home_team'=>1,
             'away_team'=>2,
             'date'=>$date->now()->modify('+'.rand(2,3).' weeks')->modify('+'.rand(4,6).' months')->format('l d M Y'),
             'time'=>$date->now()->addHours(rand(16,19))->format('H:i'),
            'venue'=>$faker->randomElement(array('ssingo stadium','makindye','masaka L')),
            'broadcaster'=>$faker->randomElement(array('bbs tv','Sanuka tv','UBC tv'))
         ));

         $fixtures->create(array(
            'home_team'=>2,
            'away_team'=>1,
            'date'=>$date->now()->modify('+'.rand(2,3).' weeks')->modify('+'.rand(4,6).' months')->format('l d M Y'),
             'time'=>$date->now()->addHours(rand(16,19))->format('H:i'),
           'venue'=>$faker->randomElement(array('ssingo stadium','makindye','masaka L')),
           'broadcaster'=>$faker->randomElement(array('bbs tv','Sanuka tv','UBC tv'))
        ));



        $fixtures->create(array(
            'home_team'=>2,
            'away_team'=>3,
            'date'=>$date->now()->modify('+'.rand(2,3).' weeks')->modify('+'.rand(4,6).' months')->format('l d M Y'),
             'time'=>$date->now()->addHours(rand(16,19))->format('H:i'),
           'venue'=>$faker->randomElement(array('ssingo stadium','makindye','masaka L')),
           'broadcaster'=>$faker->randomElement(array('bbs tv','Sanuka tv','UBC tv'))
        ));

        $fixtures->create(array(
            'home_team'=>3,
            'away_team'=>1,
            'date'=>$date->now()->modify('+'.rand(2,3).' weeks')->modify('+'.rand(4,6).' months')->format('l d M Y'),
             'time'=>$date->now()->addHours(rand(16,19))->format('H:i'),
           'venue'=>$faker->randomElement(array('ssingo stadium','makindye','masaka L')),
           'broadcaster'=>$faker->randomElement(array('bbs tv','Sanuka tv','UBC tv'))
        ));


        $fixtures->create(array(
            'home_team'=>1,
            'away_team'=>3,
            'date'=>$date->now()->modify('+'.rand(2,3).' weeks')->modify('+'.rand(4,6).' months')->format('l d M Y'),
             'time'=>$date->now()->addHours(rand(16,19))->format('H:i'),
           'venue'=>$faker->randomElement(array('ssingo stadium','makindye','masaka L')),
           'broadcaster'=>$faker->randomElement(array('bbs tv','Sanuka tv','UBC tv'))
        ));


        $fixtures->create(array(
            'home_team'=>3,
            'away_team'=>1,
            'date'=>$date->now()->modify('+'.rand(2,3).' weeks')->modify('+'.rand(4,6).' months')->format('l d M Y'),
             'time'=>$date->now()->addHours(rand(16,19))->format('H:i'),
           'venue'=>$faker->randomElement(array('ssingo stadium','makindye','masaka L')),
           'broadcaster'=>$faker->randomElement(array('bbs tv','Sanuka tv','UBC tv'))
        ));
    }


}
