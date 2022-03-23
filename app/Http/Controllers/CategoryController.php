<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
	
    public function index()
    {	
    	  $categories = Category::all();
    	  return view('admin.category.category',compact('categories'));
    }
  


// End method

		  public function create(){
		  	 return view('admin.category.create');
		  }

// End method

		  public function store(CategoryRequest $request)
			{
				$data = $request->all();
		        Category::create($data);

		        Toastr::success('Category Successfully Create :)' ,'Success');
		        return redirect()->route('category');

			}

// End method

			public function Delete($id)
			{
				  $category = Category::find($id);
		    	  $category->delete();

		      Toastr::success('Category Successfully Delete :)' ,'Success');
		       return redirect()->back();
			}

// End method


   // api frontend insert data
  // api frontend insert data


// End method api in frontend section
// End method api in frontend section
   public function test()
   {
   	  $categories = Category::all();
      return response()->json([
         'POST' =>$categories
        ],200) ;

   }

   // insert from vue frontend section

   public function insert(Request $request)
   {

   	   $category = new Category();
   	   $category->name = $request->name;

   	   $category->save();
   	   return response()->json([
   	   		'message' => 'Category added successfully'

   	   ],201);
   }





}
