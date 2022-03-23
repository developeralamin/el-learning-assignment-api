@extends('frontend.layout.frontend')



{{-- @section('title')

{{ $queryString }}

@endsection
 --}}
@section('frontend_content')
<div class="slider search_Section">   
	<div class="breadcumb-wrap text-center">
    <h5 style="color: #fff;" class="title ">
    	<b>{{ $data->count() }} Results for {{ $queryString }}</b></h5>
    <ul>
        <li><a  href="{{ url('/') }}">Home</a></li>
       
    </ul>
</div>

 </div><!-- slider -->

 
<section class="blog-area section">
        <div class="container">

            <div class="row">
  @if($data->count() > 0)

 @forelse($data as $key => $feature)                     

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                                  	
    <div class="blog-image">
    	<img src="{{ url('img/course/'.$feature->photo) }}" alt="Blog Image">
    </div>


                            <div class="blog-info">

                                <h4 class="title"><a href="#"><b>
                                	{{ $feature->title }}</b></a>
                                </h4>

                             <h5 class="badge"><b>
                                	{{ $feature['category']['name'] }}</b>
                                </h5>
                                <br>


                           <a href="{{ route('courseShow',$feature->id) }}" class="btn btn-success">View Course</a>  
                           

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
@endif
            </div><!-- row -->

           

        </div><!-- container -->
    </section><!-- section -->




@endsection


