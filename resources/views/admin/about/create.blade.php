@extends('admin.dashboard')

@section('main_content')


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add About </h1>
</div>


<div class="row clearfix">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form action=" {{ route('about.store') }} " method="post">

            @csrf

            <div class="form-group">
                <label for="name"> Description Name </label>
                <textarea cols="10" rows="16" type="text" class="form-control"
                    name="description" placeholder="Enter description">
                    

                </textarea>
                
            
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>





@endsection