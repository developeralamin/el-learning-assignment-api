@extends('frontend.layout.frontend')

@section('frontend_content')

  <div class="slider coure_Section">
 	 
 	 <h1>Our All Courses</h1>

 </div><!-- slider -->
 <section class="blog-area section">
        <div class="container">

            <div class="row">
   @forelse(App\Models\Course::all() as $course)                         

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                                  	
    <div class="blog-image">
    	<img src="{{ url('img/course/'.$course->photo) }}" alt="Blog Image">
    </div>


                            <div class="blog-info">

                                <h4 class="title"><a href="#"><b>
                                	{{ $course->title }}</b></a>
                                </h4>

                             <h5 class="badge"><b>
                                	{{ $course['category']['name'] }}</b>
                                </h5>
                                <br>


                           <a href="{{ route('courseShow',$course->id) }}" class="btn btn-success">View Course</a>  
                           

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

               @empty

                 <div class="h1tagNotFound">
                    <div>
                        <div>

                        	<h1>No Courses found here :) </h1>
 						</div>
                    </div>
                </div>
                @endforelse
 <!-- col-lg-4 col-md-6 -->

            </div><!-- row -->

            <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

        </div><!-- container -->
    </section><!-- section -->




@endsection