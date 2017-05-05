<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 25; $i++) {
        	$location = new Location;
        	$location->latitude = $i;
        	$location->longitude = $i;
        	$location->address = "Address $i";
        	$location->save();
        }
    }
}
