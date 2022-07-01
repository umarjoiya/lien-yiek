@extends('index')
@push('title')
    <title>Create Batch</title>
@endpush
@section('content')
<div class="container mt-4">

    <div class="card">
  <div class="card-header">
CREATE BATCH
  </div>
  <div class="card-body">

 <div class="col-sm-4">
     <div class="form-group">
       <label for="">Batch</label>
       <input type="text" class="form-control">
     </div>
<br>
     <div>
       
       <button class="btn btn-primary">Save</button>

     </div>
     </div>

  </div>
</div>

<br>

<div class="container">

<div class="row" style="text-align: center;">  
  <div class="dot col-md-2 offset-4" id="On" style=" height: 100px;width: 100px;"><span class="iconify" data-icon="codicon:debug-start" style="color: green;padding-right: 10px;" data-width="90" data-height="90" ></span></div>
  &nbsp;&nbsp;&nbsp;
  <div class="dot2 col-md-2" id="Resume"><span class="iconify" data-icon="carbon:pause-future" style="color: #4fd1d9;" data-width="90" data-height="90"></span></div>
  <div class="dot1 col-md-2" id="Off" style="height: 100px; width: 100px;"><span class="iconify" data-icon="bi:stop-fill" style="color: #b80719;padding-right: 14px;" data-width="90" data-height="90"></span></div>
</div>
</div>
</div>
@endsection