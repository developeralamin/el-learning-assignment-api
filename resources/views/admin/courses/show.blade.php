@extends('admin.dashboard')

@section('main_content')




<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Course Details </h1>
</div>
  <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800"> All Course </h1> --}}
    <a href="{{ route('course') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> All Course
    </a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Course Details </h6>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Title</th>
                <td>{{ $course->title }}</td>
            </tr>
            <tr>
                <th> Category </th>
                <td> {{ $course['category']['name'] }} </td>
            </tr>
            <tr>
                <th>Description</th>
                <td> {{ $course->description }} </td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>
                    <img width="400px" src="{{ url('/img/course/').'/'.$course->photo }}">
                </td>
            </tr>
        </table>
    </div>
</div>







@stop
