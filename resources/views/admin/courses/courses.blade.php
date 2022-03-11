@extends('admin.dashboard')

@section('main_content')

<!-- Page Heading -->
   <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> All Course </h1>
    <a href="{{ route('create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add Course
    </a>
</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Category</th>
                        {{-- <th>Photo</th> --}}
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($courses as $key=>$course)
                        <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{ $course->title }} </td>
                            <td> {{ $course['category']['name'] }} </td>
         {{--  <td>
          <img width="120px" src="{{ url('/img/course/').'/'.$course->photo }}">
        </td> --}}
                            <td>
     {{$course->created_at == '' ? 'N/A' : $course->created_at->format('y-m-d').'('.$course->created_at->diffForHumans().')'}}

                           </td>
                           
                	<td>
                        <a href="{{ route('show',$course->id) }}" id="" class="btn btn-success btn-sm">View</a>
                        <a href="{{ route('edit',$course->id) }}" id="" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{ route('delete',$course->id) }}" id="delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>

                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


  
@endsection