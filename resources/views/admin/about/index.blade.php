@extends('admin.dashboard')

@section('main_content')

   
   <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> All Abouts </h1>
    <a href="{{ route('about.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Add About
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
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                	@foreach($abouts as $key=>$about)

                	          <tr>
                		         <td> {{ $key+1 }} </td>
                                <td> {{ $about->description }} </td>
                                <td> {{ $about->created_at }} </td>
                                <td> 

                                   <a href="{{ route('about.edit',$about->id) }}" 
                                     class="btn btn-primary btn-sm">Edit</a> 

                                 </td>

                             <td>
                                <form method="POST" action="{{ route('about.destroy',$about->id) }}" >
                                    @csrf
                                    @method('delete')

                                   <button  onclick=" return confirm('Are your sure delete') "
                                    class="btn btn-danger btn-sm">Delete</button>     
                                </form>
                                
                            </td>
                	       </tr>

                	@endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>






@endsection