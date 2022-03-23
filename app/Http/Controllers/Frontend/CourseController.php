<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{

	 public function allCourses()
	 {
	 	 $courses = Course::all();
	    return view('frontend.courses',compact('courses'));
	 }
    
   public function courseShow($id)
   {
   	   $course = Course::findOrFail($id);
   	  return view('frontend.courses_details',compact('course'));
   }
	 

}
