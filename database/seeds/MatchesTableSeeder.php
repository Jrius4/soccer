<?php

use App\Match;
use App\Team;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::create(array(
            'home_team'=>1,
            'away_team'=>2,
            'home_score'=>null,
            'away_score'=>null,
            'slug'=>str_slug(Team::find(1)->name.' vs '.Team::find(2)->name,'_'),
            'match_date'=>Carbon::now()->modify('-'.rand(1,2).' days')->modify('-'.rand(40,120).' minutes'),
        ));

        Match::create(array(
            'home_team'=>2,
            'away_team'=>1,
            'home_score'=>null,
            'away_score'=>null,
            'slug'=>str_slug(Team::find(2)->name.' vs '.Team::find(1)->name,'_'),
            'match_date'=>Carbon::now()->modify('-'.rand(1,2).' days')->modify('-'.rand(40,120).' minutes'),
        ));

        Match::create(array(
            'home_team'=>2,
            'away_team'=>3,
            'home_score'=>null,
            'away_score'=>null,
            'slug'=>str_slug(Team::find(2)->name.' vs '.Team::find(3)->name,'_'),
            'match_date'=>Carbon::now()->modify('-'.rand(1,2).' days')->modify('-'.rand(40,120).' minutes'),
        ));

        Match::create(array(
            'home_team'=>3,
            'away_team'=>2,
            'home_score'=>null,
            'away_score'=>null,
            'slug'=>str_slug(Team::find(3)->name.' vs '.Team::find(2)->name,'_'),
            'match_date'=>Carbon::now()->modify('-'.rand(1,2).' days')->modify('-'.rand(40,120).' minutes'),
        ));

        Match::create(array(
            'home_team'=>4,
            'away_team'=>3,
            'home_score'=>null,
            'away_score'=>null,
            'slug'=>str_slug(Team::find(4)->name.' vs '.Team::find(3)->name,'_'),
            'match_date'=>Carbon::now()->modify('-'.rand(1,2).' days')->modify('-'.rand(40,120).' minutes'),
        ));

    }
}
