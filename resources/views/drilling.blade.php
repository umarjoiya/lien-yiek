@extends('index')
@push('title')
    <title>Drilling</title>
@endpush
@section('content')
<div class="container mt-4">
<div class="card">
  <div class="card-header">
    Drilling
  </div>
  <div class="card-body">

  <div class="row">
    <div class="col-sm-4">
     <div class="form-group">
    <label for="">Batch No</label>
    <select class="form-select" aria-label="Default select example">
<option value="">batch A</option>
<option value="">batch B</option>

</select>
    </div>
    </div>
    <div class="col-sm-4">
     <div class="form-group">
    <label for="">Remarks</label>
    <textarea name="" id="" cols="10" rows="1" class="form-control"></textarea>
    </div>
    </div>
    <div class="col-sm-4">
     <div class="form-group">
    <label for="">Operater Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-sm-4">
     <div class="form-group">
    <label for="">Date</label>
    <input type="date" class="form-control">
    </div>
    </div>
  </div>

     <br>
     
  <table class="table table1">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Pallet No</th>
      <th scope="col">Weight (kg)</th>
      <th scope="col">Total Pcs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td>  <div>
  <button class="btn btn-primary" id="add_btn" style="float: right;">Add more</button>
</div></td>
    </tr>

  </tbody>

</table>
<div class="row">  
<div class="col-md-1 offset-11">
       
       <button class="btn btn-primary">Save</button>

     </div>
     </div>
</div>
 </div>
</div>
@endsection