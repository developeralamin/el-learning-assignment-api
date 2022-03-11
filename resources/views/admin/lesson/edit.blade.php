@extends('admin.dashboard')

@section('main_content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update  Lesson </h1>
</div>


<div class="row clearfix">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action=" {{ route('lesson_update',$editData->id) }} " method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name"> Lesson Title </label>
                <input type="text" class="form-control"
                    name="title" value="{{ $editData->title }}" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="name"> Course </label>
                  <select class="form-control" name="courese_id">
                     <option>Select Course</option>
                    @foreach($courses as $course)

                     <option value="{{ $course->id }}" {{ ($editData->courese_id == $course->id)?
                      'selected':'' }} >{{ $course->title }}</option>
                   
                     @endforeach
                  </select>  
            </div>

             <div class="form-group">
                <label for="name"> Description </label>
                  <textarea rows="10" cols="15" class="form-control" name="description">
                     {{ $editData->description }}

                  </textarea>
            </div>

             <div class="form-group">
                <label for="name"> Video URL </label>
                
                    <input type="text" value="{{ $editData->video_url }}" class="form-control" placeholder="Enter Video URL" id="product_thumbnail"  name="video_url" 
                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </div>

              {{-- end this section --}}
{{-- 
    <div class="controls">
	   <img id="blah" alt="your image" width="400" height="400" src="{{url('img/no_image.jpg') }}" style="width: 300px;height: 300px;border: 1px solid #000000" alt="User Avatar"> 

	</div> --}}


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

  
@endsection