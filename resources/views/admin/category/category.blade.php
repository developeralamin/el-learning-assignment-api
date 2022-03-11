@extends('admin.dashboard')

@section('main_content')

   
   <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Categories </h1>
    <a href="{{ route('category_create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add Category
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                	@foreach($categories as $category)

                	          <tr>
                		         <td> {{ $category->id }} </td>
                                <td> {{ $category->name }} </td>
                                <td> {{ $category->created_at }} </td>

                                <td>
                                    <a href="{{ route('delete',$category->id) }}" id="delete" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                	       </tr>


                	@endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>






@endsection