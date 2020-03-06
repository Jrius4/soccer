<?php

use App\Farmer;
use Illuminate\Database\Seeder;

class FarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Farmer::create(array(
            'name'=>'John Paul',
            'location'=>'Masaka',
            'farm_size'=>'4 acres',
            'produce'=>'tomatoes',
            'phone'=>'+256778899326',
        ));

        Farmer::create(array(
            'name'=>'Yukee Paul',
            'location'=>'Guru',
            'farm_size'=>'4 acres',
            'produce'=>'millet',
            'phone'=>'+25677239326',
        ));

        Farmer::create(array(
            'name'=>'Okello James',
            'location'=>'Muyenga',
            'farm_size'=>'7 hecteas',
            'produce'=>'casava',
            'phone'=>'+25677887326',
        ));
    }
}
