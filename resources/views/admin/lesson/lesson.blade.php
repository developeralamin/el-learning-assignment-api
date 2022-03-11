@extends('admin.dashboard')

@section('main_content')

<!-- Page Heading -->
   <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> All Lesson </h1>
    <a href="{{ route('lesson_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add Lesson
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
                        <th>Course</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                         <th>SL</th>
                        <th>Title</th>
                        <th>Course</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                   @foreach ($lessons as $key=>$lesson)
                        <tr>
                            <td> {{ $key+1 }} </td>
                            <td> {{ $lesson->title }} </td>
                            <td> {{ $lesson['course']['title'] }} </td>

                            <td>
     {{$lesson->created_at == '' ? 'N/A' : $lesson->created_at->format('y-m-d').'('.$lesson->created_at->diffForHumans().')'}}

                           </td>
                           
                    <td>
                        <a href="{{ route('lesson_show',$lesson->id) }}" id="" class="btn btn-success btn-sm">View</a>
                        <a href="{{ route('lesson_edit',$lesson->id) }}" id="" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{ route('lesson_delete',$lesson->id) }}" id="delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>

                            
                        </tr>
                    @endforeach

               
                </tbody>
            </table>
        </div>
    </div>
</div>


  
@endsection