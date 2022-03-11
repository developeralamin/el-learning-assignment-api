<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\CourseRequest;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use File; // For File

class CoursesController extends Controller
{
    public function index()
    {
    	 $courses = Course::all();
    	 return view('admin.courses.courses',compact('courses'));
    }



//End method

   public function create(){
     $categories = Category::all();
     return view('admin.courses.create',compact('categories'));
   }

// End method


   public function store(CourseRequest $request){

       // return $request->all();
    $slug = strtolower(str_replace(' ','-' ,$request->title));
        if($slug > 0){
         $slug = $slug .'-'.time();
       }

         if ($request->hasfile('photo')) {
         $image = $request->file('photo');
         $text = $slug .'.'.$image->getClientOriginalExtension();
         Image::make($image)->resize(600, 622)->save(public_path('/img/course/'.$text));

     Course::create([
        'title'                  =>$request->title,
        'description'            =>$request->description,
        'photo'                  =>$text,
        'category_id'            =>$request->category_id,
        'created_at'             =>Carbon::now(),
      ]);
         }

      Toastr::success('Course Successfully Create :)' ,'Success');
      return redirect()->route('course');

   }

// End method


   public function show($id){
     $course  = Course::findOrFail($id);
     return view('admin.courses.show',compact('course'));
      
   }

   //End method


   public function Edit($id){
          $editData    = Course::findORFail($id);
          $categories    = Category::all();
          return view('admin.courses.edit',compact('editData','categories'));
   }

// End method


   public function Update(Request $request ,$id){

        $old_course   =Course::findOrFail($id);
        $slug         = $old_course->title;
        $old_image    = $old_course->photo;


         if ($request->hasfile('photo')) {
               $image = $request->file('photo');
         $ext = $slug .'.'.$image->getClientOriginalExtension();
         if (file_exists( public_path('img/course/'. $old_image))) {
        
         unlink(public_path('img/course/'. $old_image));

       }

         Image::make($image)->resize(600, 622)->save(public_path('/img/course/'.$ext)); 
  
   Course::findOrFail($id)->update([

        'title'              =>$request->title,
        'description'        =>$request->description,
        'category_id'        =>$request->category_id,
        'photo'              =>$ext,
        'updated_at'         =>Carbon::now(),

      ]);


         }

   else{
      Course::findOrFail($id)->update([
        'title'                  =>$request->title,
        'description'            =>$request->description,
         'category_id'           =>$request->category_id,
        'updated_at'             =>Carbon::now(),
      ]);
         }
         Toastr::success('Course Successfully Update :)' ,'Success');
       return redirect()->route('course');

   }

// End method


   public function Delete($id){
      $course  = Course::findOrFail($id);
      $image_path = public_path('/img/course/'.$course->photo);

      if(file_exists($image_path)){
        File::delete($image_path);
      }

      $course->delete();

     Toastr::success('Course Successfully Delete :)' ,'Success');
     return redirect()->back();

   }

// End method



//api use in controller
//api use in controller

  public function test()
  {
       $courses = Course::all();
       return response()->json([
              'POST' =>  $courses 
        ],200);
  }
  
// insert with api
// insert with api
   public function insert(Request $request)
   {
         $course = new Course();

      $course->title      = $request->title;
      $course->description = $request->description;

      $course->save();

      return response()->json([
          'message' => 'Course added successfully'
       ],201);


   }



}
