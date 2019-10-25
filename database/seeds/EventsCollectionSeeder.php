<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('events')->delete();
        DB::collection('events')->insert(array(
            'name' => 'Event 1',
            'description' => 'This is a seeded event',
            'start' => new \DateTime(),
            'end' => new \DateTime()
        ));
    }
}
