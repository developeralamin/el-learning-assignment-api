@extends('admin.dashboard')

@section('main_content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add new Course </h1>
</div>


<div class="row clearfix">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action=" {{ route('store') }} " method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name"> Course Title </label>
                <input type="text" class="form-control"
                    name="title" value="{{ old('title') }}" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="name"> Category </label>
                  <select class="form-control" name="category_id">
                     <option>Select Category</option>
                    @foreach($categories as $category)

                     <option value="{{ $category->id }} "  @if ( $category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                   
                     @endforeach
                  </select>  
            </div>

             <div class="form-group">
                <label for="name"> Description </label>
                  <textarea rows="10" cols="15" class="form-control" name="description">
                     {{ old('description') }}

                  </textarea>
            </div>

             <div class="form-group">
                <label for="name"> Photo </label>
                
                    <input type="file" class="form-control" id="product_thumbnail"  name="photo" 
                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </div>

              {{-- end this section --}}

    <div class="controls">
	 <img id="blah" alt="your image" width="400" height="400" src="{{url('img/no_image.jpg') }}" style="width: 300px;height: 300px;border: 1px solid #000000" alt="User Avatar"> 

	</div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

  
@endsection