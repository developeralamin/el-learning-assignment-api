@extends('admin.dashboard')

@section('main_content')




<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Lesson Details </h1>
</div>
  <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800"> All Lesson </h1> --}}
    <a href="{{ route('lesson') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> All Lesson
    </a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Lesson Details </h6>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Title</th>
                <td>{{ $lesson->title }}</td>
            </tr>
            <tr>
                <th> Course </th>
                <td> {{ $lesson['course']['title'] }} </td>
            </tr>
            <tr>
                <th>Description</th>
                <td> {{ $lesson->description }} </td>
            </tr>
            <tr>
                <th>Video URL</th>
                <td>
                    {{-- {{ $lesson->video_url }} --}}
                    <a href="{{ $lesson->video_url }}" target="__blank">{{ $lesson->video_url }}</a>
                </td>
            </tr>
        </table>
    </div>
</div>







@stop
