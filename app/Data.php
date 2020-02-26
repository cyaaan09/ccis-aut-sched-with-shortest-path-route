<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data
{
	protected $meeting_times = [];
    public function __construct($meeting_times) {
    	$this->meeting_times = $meeting_times;
    }
}
