<?php

use Illuminate\Database\Seeder;
use App\Room;

class DistancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$rooms = Room::all();
    	foreach($rooms as $roomA) {
    		foreach($rooms as $roomB) {
    			if($roomA->id == $roomB->id) {
    				// do nothing
    			} else {
			        DB::table('distances')->insert([
			        	[
			        		'from_room_id' => $roomA->id,
			        		'to_room_id' => $roomB->id,
			        		'distance' => mt_rand(1,95),
			        		'created_at' => \Carbon\Carbon::now(),
			                'updated_at' => \Carbon\Carbon::now()
			        	]
			        ]);    				
    			}
    		}
    	}
    }
}
