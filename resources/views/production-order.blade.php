@extends('index')
@push('title')
    <title>Create Production Order</title>
@endpush
@section('content')
<div class="container mt-4">
<div class="card">
  <div class="card-header" >
 PRODUCTION ORDER
  </div>
  <div class="card-body">

<div class="container">
  <div class="row">
    <div class="col-sm-4">
     <div class="form-group">
       <label for="">Production Order Number</label>
       <input type="text" class="form-control">
     </div>
    </div>
    <div class="col-sm-4">    
       <div class="form-group">
    <label for="">Product</label>
    <input type="text" class="form-control">
    </div>
  </div>
    <div class="col-sm-4">    
       <div class="form-group">
    <label for="">Batch No</label>
    <input type="text" class="form-control">
    </div>
  </div>
  </div>
<br>
   <div class="row">
    <div class="col-sm">
     <div class="form-group">
       <label for="">Target Produce</label>
       <input type="text" class="form-control">
     </div>
    </div>
        <div class="col-sm">
         <div class="form-group">
    <label for="">No. of Cavity</label>
    <select class="form-select" aria-label="Default select example">
<option value="">1</option>
<option value="">2</option>
<option value="">3</option>
<option value="">4</option>
<option value="">5</option>
</select>
    </div>
    </div>
    <div class="col-sm">
       <div class="form-group">
       <label for="">Reject (%)</label>
       <input type="text" class="form-control">
     </div>
    </div>
  </div>
<br>
   <div class="row">
    <div class="col-sm">
       <div class="form-group">
       <label for="">Order date</label>
       <input type="date" class="form-control">
     </div>
    </div>
    <div class="col-sm">
       <div class="form-group">
       <label for="">Operater Name</label>
       <input type="text" class="form-control">
     </div>
    </div>
    <div class="col-sm">
     <div class="form-group">
       <label for="">Order Date</label>
       <input type="date" class="form-control">
     </div>
    </div>
  </div>

<br>
   <div class="row">
    <div class="col-sm">
      <div class="form-group">
       <label for="">Due Date</label>
       <input type="date" class="form-control">
     </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
    <label for="">Weight per Unit (kg)</label> 
    <input type="text" class="form-control">
    </div>
  </div>
    <div class="col-sm">
    <div class="form-group">
    <label for="">Machine</label>
    <select class="form-select" aria-label="Default select example">
<option value="">A</option>
<option value="">B</option>
<option value="">C</option>
</select>
    </div>
    </div>
  </div>
  <br>
  <div class="row">       
    <div class="col-sm">
         <div class="form-group">
       <label for="">Weight per mould</label>
       <input type="text" class="form-control" onkeyup="multiplyValues('mould_pcs','mould_kg','mould_total')" id="mould_pcs">
     </div>
    </div>
    <div class="col-sm-1 pt-3">
        <label for=""></label>
     <div class="text-center">X</div>
    </div>
        <div class="col-sm">
      <div class="form-group">
    <label for="">Forget Produced</label> 
    <input type="text" class="form-control" onkeyup="multiplyValues('mould_pcs','mould_kg','mould_total')" id="mould_kg">
    </div>
    </div>
    <div class="col-sm-1 pt-3">
        <label for=""></label>
     <div class="text-center">=</div>
    </div>
        <div class="col-sm">
      <div class="form-group">
    <label for=""></label> 
    <input type="text" class="form-control" readonly onkeyup="multiplyValues('mould_pcs','mould_kg','mould_total')" id="mould_total">
    </div>
    </div>
  </div>
<br>  
  <div>
    <button class="btn btn-primary">Save</button>
  </div>

  </div>

  </div>
</div>
</div>
@endsection