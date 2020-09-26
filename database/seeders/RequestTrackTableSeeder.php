<?php

namespace Database\Seeders;

use App\Models\RequestTrack;
use Illuminate\Database\Seeder;

class RequestTrackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestTrack::factory()->count(3)->create();
    }
}
