@extends('index')
@push('title')
    <title>Machine</title>
@endpush
@section('content')
  <div class="container mt-4">

<div class="card">
  <div class="card-header">
   MACHINE
  </div>
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-sm">
     <div class="form-group">
    <label for="">Machine Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-sm">
     <div class="form-group">
       <label for="">Machine Code</label>
       <input type="text" class="form-control">
     </div>
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
@endsection