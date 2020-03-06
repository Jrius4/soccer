<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);

        $this->call(ArticlesTableSeeder::class);
        $this->call(WinesTableSeeder::class);

        $this->call(VendorSeeder::class);
        $this->call(FarmerSeeder::class);

        $this->call(TeamsTableSeeder::class);
        $this->call(FixturesTableSeeder::class);
        $this->call(MatchesTableSeeder::class);

    }
}
