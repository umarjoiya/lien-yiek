@extends('index')
@push('title')
    <title>Material</title>
@endpush
@section('content')
  <div class="container mt-4">

<div class="card">
  <div class="card-header">
   MATERIAL IN
  </div>
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
     <div class="form-group">
    <label for="">Date</label>
    <input type="date" class="form-control">
    </div>
    </div>
    <div class="col-sm-6">
     <div class="form-group">
       <label for="">Scrop Iron (kg)</label>
       <input type="text" class="form-control">
     </div>
    </div>
  </div>
<div class="row">
 <div>
       
       <button class="btn btn-primary">Save</button>

     </div>
</div>
  </div>
</div>
</div>
</div>
<br>
 <div class="container mt-4">

<div class="card">
  <div class="card-header">
   MATERIAL OUT
  </div>
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
     <div class="form-group">
    <label for="">Date</label>
    <input type="date" class="form-control">
    </div>
    </div>
    <div class="col-sm-6">
     <div class="form-group">
       <label for="">Scrop Iron (kg)</label>
       <input type="text" class="form-control">
     </div>
    </div>
  </div>
<div class="row">
 <div>       
       <button class="btn btn-primary">Save</button>
     </div>
     </div>
     </div>
</div>
</div>
</div>
@endsection