<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventsCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::collection('events')->delete();

        DB::collection('events')->insert(array(
            'name' => $faker->text('20'),
            'description' => $faker->text('150'),
            'start' => new \MongoDB\BSON\UTCDateTime(new DateTime('2019-11-02')),
            'end' => new \MongoDB\BSON\UTCDateTime(new DateTime("2019-11-05"))
        ));

        DB::collection('events')->insert(array(
            'name' => $faker->text('20'),
            'description' => $faker->text('150'),
            'start' => new \MongoDB\BSON\UTCDateTime(new DateTime("2019-11-01")),
            'end' => new \MongoDB\BSON\UTCDateTime(new DateTime("2019-11-01"))
        ));
    }
}
