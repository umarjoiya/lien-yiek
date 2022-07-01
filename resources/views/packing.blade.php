@extends('index')
@push('title')
    <title>Packing</title>
@endpush
<style>
  *{
    line-height: 60%;
  }
</style>
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
          <h1 style="text-align: center; margin-top: 10px;">LIEN YAIK HARDWARE (M) SDN BHD</h1>
    </div>
    <div class="card-body">
       <div class="container">
            <p style="text-align: center;">LOT 11537, PERSIARAN EHSAN 1, TAMAN EMPIAN EHSAN, OFF JALAN BALAKONG,</p>
    
    <p style="text-align: center;">43300 SERI KAMBANGAN, SELANGOR DARUL EHSAN</p>
    
    <p style="text-align: center;">TEL:016-550 2503 / 019-316 9888 FAX:03-8962 2503 EMAIL:lienyaik@hotmail.com</p>
    <br><br>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h5>PACKING DATE : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>ITEM NAME : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>UNITS : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>ITEM SPECIFICATION _ WITH IN SPECIFICATION</h5>
        </div>
        <div class="col-md-1 offset-2">
          <h5>YES :</h5>
        </div>
        <div class="col-md-2">
           <input type="text"/>
        </div>
        <div class="col-md-1 offset-8">
          <h5>NO :</h5>
        </div>
        <div class="col-md-2">
           <input type="text"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>DELIEVERY DATE : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
       <div class="row">
        <div class="col-md-6">
          <h5>DEFAULTS DURING PACKING : </h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <h5>RUSTY : </h5>
        </div>
        <div class="col-md-2 offset-1">
           <input type="text"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <h5>BROKEN : </h5>
        </div>
        <div class="col-md-2 offset-1">
          <input type="text"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <h5>UN EVEN SURFACE : </h5>
        </div>
        <div class="col-md-2 offset-1">
           <input type="text"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <h5>ITEM WEIGHT DIFFERS : </h5>
        </div>
        <div class="col-md-2 offset-1">
           <input type="text"/>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>PACKED BY : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
         <div class="col-md-2 offset-4">
          <button type="button" class="form-control btn btn-outline-dark" style="transition: 1s;">PACKING</button>
      </div>
      <br>
    </div>
    </div>
  </div>
</div>
@endsection