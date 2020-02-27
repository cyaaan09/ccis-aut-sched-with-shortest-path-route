<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Meeting_TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meeting_times')->insert([
        	[
        		'day' => 'Mon',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '10:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '12:00 PM',
        		'end' => '1:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '1:00 PM',
        		'end' => '2:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '2:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '5:30 PM',
        		'end' => '6:30 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '2:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '1:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '4:00 PM',
        		'end' => '5:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '2:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '4:00 PM',
        		'end' => '5:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '7:30 AM',
        		'end' => '9:00 AM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '12:00 PM',
        		'end' => '1:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '2:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	
        	
        ]);
    }
}
