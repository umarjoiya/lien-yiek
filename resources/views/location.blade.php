@extends('index')
@push('title')
    <title>Location</title>
@endpush
@section('content')
<div class="container mt-4">
<div class="card">
  <div class="card-header">
   CREATE LOCATION
  </div>
  <div class="card-body">
    
 <div class="row">
    <div class="col-sm">
     <div class="form-group">
       <label for="">Location Code</label>
       <input type="text" class="form-control">
     </div>
    </div>
    <div class="col-sm">
      <div class="form-group">
       <label for="">Location Name</label>
       <input type="text" class="form-control">
     </div>
    </div>
</div>
<br>
 <div>
       
       <button class="btn btn-primary">Save</button>

     </div>

</div>
<br>
<div class="container">
<div class="row">
<h1 class="col-md-4 offset-4" style="float: right;">Location List</h1>
</div>  
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
</div>
@endsection