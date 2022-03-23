<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\LessonRequest;
use App\Models\Lesson;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File; // For File


class LessonController extends Controller
{
   
     public function index()
	    {
	    	 $lessons = Lesson::all();
	    	return view('admin.lesson.lesson',compact('lessons'));
	    }

//End method


//End method


   public function create(){
     $courses = Course::all();
     return view('admin.lesson.create',compact('courses'));
   }

// End method


   public function store(LessonRequest $request){

     // return $request->all();
     Lesson::create([
        'title'                      =>$request->title,
        'description'                =>$request->description,
        'video_url'                  =>$request->video_url,
        'courese_id'                 =>$request->courese_id,
        'created_at'                =>Carbon::now(),
      ]);
         

      Toastr::success('Lesson Successfully Create :)' ,'Success');
      return redirect()->route('lesson');

   }

// End method


   public function show($id){
     $lesson  = Lesson::findOrFail($id);
     return view('admin.lesson.show',compact('lesson'));
      
   }

//    //End method


   public function Edit($id){
          $editData      = Lesson::findORFail($id);
          $courses       = Course::all();
          return view('admin.lesson.edit',compact('editData','courses'));
   }

// // End method


   public function Update(Request $request ,$id){


      Lesson::findOrFail($id)->update([
        'title'                  =>$request->title,
        'description'            =>$request->description,
         'courese_id'            =>$request->courese_id,
         'video_url'             =>$request->video_url,
        'updated_at'             =>Carbon::now(),
      ]);
         
         Toastr::success('Lesson Successfully Update :)' ,'Success');
       return redirect()->route('lesson');

   }

// // End method


   public function Delete($id){
      $lesson  = Lesson::findOrFail($id);
      $lesson->delete();

     Toastr::success('Lesson Successfully Delete :)' ,'Success');
     return redirect()->back();

   }

// End method

// api section use here
// api section use here
// api section use here

   public function test()
   {
        $lessons = Lesson::all();
        return response()->json([
           'alamin' => $lessons
        ],200);

   }

// insert section 

   public function insert(Request $request)
   {
      $lesson              = new Lesson();
      $lesson->title       = $request->title;
      $lesson->description = $request->description;

      $lesson->save();
      return response()->json([
        'message' => 'Lesson added Successfully'
      ],201);
      

   }

   // public function delete($id)
   // {
   //           Lesson::find($id)->delete();
   //          return response()->json('Product not found.', 404);
        
   // }
   



}


