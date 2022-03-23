@extends('frontend.layout.frontend')

@section('frontend_content')
<div class="slider coure_Section">
     
     <h1>{{ $lesson->title }}</h1>

 </div><!-- slider -->

<br>
<br>
<br>

<div class="lesson-detials">
    <div class="">

 <div class="row clearfix">
    <div class="col-md-3">
        <div class="course-left">
            <h2 class="text-center"> {{ $course->title }} </h2>
            <div class="course-lessson">
                <ol>
                    @forelse ($course->lessons as $lsn )
                        <li class="@if ($lsn->id == $lesson->id) active-lesson @endif">
                            <a href=" {{ route('Lesson_details', ['lesson'=> $lsn->id, 'slug'=> Str::slug($lsn->title)]) }} " class="nav-link"> {{ $lsn->title }} </a>
                        </li>


                      @empty
                      
                       <div class="h1tagNotFound">
                    <div>
                        <div>

                            <h1>No Lesson found here :) </h1>
                        </div>
                    </div>
                </div>  
                    @endforelse
                </ol>
            </div>
        </div>
    </div>

            <div class="col-md-9">
                <div class="lesson-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item embed-item" src="{{ $lesson->video_url }}" allowfullscreen></iframe>
                    </div>
                    <h1 class="mt-3"> {{ $lesson->title }} </h1>
                    <small> <b>Published at: </b> {{ $lesson->created_at }} </small>
                    <p class="mt-4"> {{ $lesson->description }} </p>


<div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://elearning-19.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div>





            </div>
        </div>

    </div>
</div>

@endsection