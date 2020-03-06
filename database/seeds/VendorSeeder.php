<?php

use App\Vendor;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create(array(
            'name'=>'John Paul',
            'location'=>'Masaka',
            'product_sold'=>'tomatoes',
            'phone'=>'+256778899326',
        ));

        Vendor::create(array(
            'name'=>'Yukee Paul',
            'location'=>'Guru',
            'product_sold'=>'millet',
            'phone'=>'+25677239326',
        ));

        Vendor::create(array(
            'name'=>'Okello James',
            'location'=>'Muyenga',
            'product_sold'=>'casava',
            'phone'=>'+25677887326',
        ));
    }
}
