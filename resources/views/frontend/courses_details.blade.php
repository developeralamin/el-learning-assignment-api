@extends('frontend.layout.frontend')

@section('frontend_content')

 <div class="slider coure_Section">
 	 
 	 <h1>Our Course {{ $course->title }}</h1>

 </div><!-- slider -->
<div class="page-header">
    <div class="container">
        
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="course-descripton">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ url('img/course/'.$course->photo) }}" alt="{{ $course->title }}">
            </div>
            <div class="col-md-8">
                <h2> {{ $course->title }}  </h2>
                {{ $course->description }}
                <div class="course-lessson mt-5">
                    <h2> Lessons </h2>
                    <ul class="ul_section">
                        @foreach ($course->lessons as $lesson )
                            <li ><a href="{{ route('Lesson_details',['lesson'=> $lesson->id, 'slug'=> Str::slug($lesson->title)]) }}" class="nav-link"> {{ $lesson->title }} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>



@endsection