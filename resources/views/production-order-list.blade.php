@extends('index')
@push('title')
    <title>Production List</title>
@endpush
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
    <div class="col-md-5 offset-4">
      <h1 class="">Production List</h1>
      </div>
                  <div class="col-md-2 offset-1">
    <a href="{{url('/production-order')}}" class="form-control btn btn-primary">Add Production<span class="iconify" data-icon="carbon:add-alt" style="color: white; padding-left: 5px;" data-width="20" data-height="20"></span></a>
    </div>
            </div>
        </div>
        <div class="card-body">    
    <table class="table table-striped firsttable" id="myTable">

     <thead class="table-dark" style="color: white;">
     <tr>
      <th><center>Serial No</center></th>
       <th><center>Code</center></th>
        <th><center>Name</center></th>
        <th><center>Action</center></th>

     </tr>

     </thead>
     <tbody>
     </tbody>
 </table>
 </div>
        </div>
        </div>
    
</div>
@endsection