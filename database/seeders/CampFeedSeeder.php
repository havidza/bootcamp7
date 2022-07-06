<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampFeed;
use Illuminate\Support\Facades\DB;

class CampFeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $campFeed =  [
            [
                'camp_id' => 1,
            ],
            [
                'camp_id' => 2,
            ],
        ];

        campFeed::insert($campFeed);

    }
}
