@extends('admin.dashboard')

@section('main_content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update About </h1>
</div>


<div class="row clearfix">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action=" {{ route('about.update',$about->id) }} " method="post">

            @csrf
            @method('put')

            <div class="form-group">
                <label for="name"> Description Name </label>
                <textarea cols="10" rows="16" type="text" class="form-control"
                    name="description" placeholder="Enter description">
                     {{ $about->description }}

                </textarea>
                
            
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>





@endsection