<?php

use App\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $faker = Faker::create();

        DB::table('users')->insert([

            [
                'name' => "Kazibwe Julius Junior",
                'email' => 'kazibwejuliusjunior@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admins3cret'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "administrator",
                'email' => 'administrator@domain.com',
                'email_verified_at' => now(),
                'password' => bcrypt('admins3cret'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "Editor",
                'email' => 'editor@domian.com',
                'email_verified_at' => now(),
                'password' => bcrypt('s3cret'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "author",
                'email' => 'author@domain.com',
                'email_verified_at' => now(),
                'password' => bcrypt('s3cret'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "contributor",
                'email' => 'contributor@domain.com',
                'email_verified_at' => now(),
                'password' => bcrypt('s3cret'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "supporter",
                'email' => 'supporter@domain.com',
                'email_verified_at' => now(),
                'password' => bcrypt('s3cret'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "subscriber",
                'email' => 'subscriber@domain.com',
                'email_verified_at' => now(),
                'password' => bcrypt('s3cret'),
                'remember_token' => Str::random(10),
            ]

        ]);

        factory(User::class,4)->create();
    }
}
