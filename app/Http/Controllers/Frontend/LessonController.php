<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function LessonShow(Lesson $lesson ,$slug)
    {
    	 $this->data['lesson'] = $lesson;
         $this->data['course'] = $lesson->course;

        return view('frontend.lessons.details', $this->data);
    }
}
