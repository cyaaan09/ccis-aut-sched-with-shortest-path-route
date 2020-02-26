<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Room;
use Illuminate\Support\Facades\DB;
use App\Data;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $hello = "Hello";
        // $rooms = Room::all();
        // foreach($rooms as $room){
        //     var_dump($room->room_type);
        //     die();
        // }
        // // var_dump($rooms); die();
        // $process = new Process(['python', storage_path("app/ga/server.py"), $hello]);
        // $process->setTimeout(0);
        // $process->run();

        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // echo $process->getOutput();

        $meeting_times = DB::Table('meeting_times')
                                ->select('meeting_times.id as id', 'meeting_times.day as day', 'meeting_times.start as start', 'meeting_times.end as end', 'meeting_times.duration as duration')
                                ->get();
        // $meeting_times_object = (object) $meeting_times;
        $test = (string)$meeting_times;
        // var_dump($test); die();
        // var_dump($rooms); die();
        $process = new Process(['py -3', storage_path("app/ga/server.py"), $test, "args2"]);
        // $process = new Process("py /app/ga/server.py {$test}");
        $process->setTimeout(0);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
        die();








        // $rooms = DB::Table('rooms')
        //                 ->leftjoin('types', 'rooms.type_id', '=', 'types.id')
        //                 ->select('rooms.id as rooms.room_id', 'rooms.seating_capacity as rooms.room_capacity', 'types.name as rooms.room_type')
        //                 ->get();
        // // dd($rooms);
        // foreach ($rooms as $key => $value) {
        //     $fetched_val[] = $value;
        // }
        // dd($fetched_val);

        // $meeting_times = DB::Table('meeting_times')
        //                 ->select('meeting_times.id as id', 'meeting_times.day as day', 'meeting_times.start as start', 'meeting_times.end as end', 'meeting_times.duration as duration')
        //                 ->get();

        // $data = new Data($meeting_times);
        // // $data_string = (string) $data;
        // // dd(serialize($data));
        // $process = new Process(['python3', storage_path("app/ga/server.py"), serialize($data)]);
        // $process->setTimeout(0);
        // $process->run();

        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // echo $process->getOutput();
        // die();


        // dd($meeting_times);
      
        $instructors = DB::Table('instructors')
                        ->select('instructors.id as instructors.instructor_id', 'instructors.name as instructors.instructor_name')
                        ->get();
        $courses = DB::Table('courses')
                        ->select('courses.id as courses.course_id', 'courses.name as courses.course_name')
                        ->get();
        $sections = DB::Table('sections')
                        ->select('sections.id as sections.section_id', 'sections.name as sections.section_name')
                        ->get();
        $subjects = DB::Table('subject_details')
                        ->leftjoin('subjects', 'subjects.id', '=', 'subject_details.subject_id')
                        ->leftjoin('types', 'types.id', '=', 'subject_details.type_id')
                        ->select('subject_details.id as subjects.subject_detail_id', 'subjects.name as subjects.subject_name', 'types.name as subjects.type_name', 'subject_details.duration as subjects.subject_duration')
                        ->get();
        // dd($subjects);
        $instructor_subjects = DB::Table('instructor_subjects')
                        ->leftjoin('courses', 'courses.id', '=', 'instructor_subjects.course_id')
                        ->leftjoin('sections', 'sections.id', '=', 'instructor_subjects.section_id')
                        ->leftjoin('instructors', 'instructors.id', '=', 'instructor_subjects.instructor_id')
                        ->leftjoin('subject_details', 'subject_details.id', '=', 'instructor_subjects.subject_details_id')
                        ->leftjoin('subjects', 'subjects.id', '=', 'subject_details.subject_id')
                        ->leftjoin('types', 'types.id', '=', 'subject_details.type_id')
                        ->select('instructor_subjects.id as instructor_subjects.instructor_subjects_id', 'courses.name as instructor_subjects.course_name', 'sections.name as instructor_subjects.section_name', 'instructors.name as instructor_subjects.instructor_name', 'subjects.name as instructor_subjects.subject_name', 'types.name as instructor_subjects.type_name')
                        ->get();
        // dd($instructor_subjects);
        $course_sections = DB::Table('course_sections')
                        ->leftjoin('courses', 'courses.id', '=', 'course_sections.course_id')
                        ->leftjoin('sections', 'sections.id', '=', 'course_sections.section_id')
                        ->select('course_sections.id as course_sections.id', 'courses.name as course_sections.course_name', 'sections.name as course_sections.section_name')
                        ->get();

        // $data = [
            
        //         'rooms' => 
        //         [
        //             json_encode($rooms), 
        //             [
        //                 json_encode($rooms)
        //             ]
        //         ]
        //     // 'meeting_times' => $meeting_times,
        //     // 'instructors' => $instructors,
        //     // 'courses' => $courses,
        //     // 'sections' => $sections,
        //     // 'subjects' => $subjects,
        //     // 'instructor_subjects' => $instructor_subjects,
        //     // 'course_sections' => $course_sections

        // ];


        // // $data = [

        // //     'rooms' => 'asdsad'
        // // ];
        
        // dd(json_encode($data));

//         $ta = array("me","you");
//         $obj = 
// [
// "rooms"=>$rooms, $rooms,
// ];

// $myJSON = json_encode($obj);

// dd($obj);         



        return view('pages.dashboard');
    }
}
