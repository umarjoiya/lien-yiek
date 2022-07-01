@extends('index')
@push('title')
    <title>Shot Blast</title>
@endpush
<style>
  *{
    line-height: 100%;
  }
</style>
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h1 style="text-align: center; margin-top: 10px;">LIEN YAIK HARDWARE (M) SDN BHD</h1>
    </div>
    <div class="card-body">
      <p style="text-align: center;">LOT 11537, PERSIARAN EHSAN 1, TAMAN EMPIAN EHSAN, OFF JALAN BALAKONG,</p>
    
    <p style="text-align: center;">43300 SERI KAMBANGAN, SELANGOR DARUL EHSAN</p>
    
    <p style="text-align: center;">TEL:016-550 2503 / 019-316 9888 FAX:03-8962 2503 EMAIL:lienyaik@hotmail.com</p>

    <div class="container">
      <br>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>SHOTBLAST DATE : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>ITEM NAME : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>PRODUCTION DATE : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-md-3 offset-3" style="text-align: left;">
          <p>TOATL WEIGHT @ KG</p>
        </div>
        <div class="col-md-2" style="text-align: center;">
          <p>WEIGHT PER UNIT</p>
        </div>
        <div class="col-md-2 offset-1" style="text-align: left;">
          <p>PCS</p>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>REJECT @ KG</h5>
        </div>
        <div class="col-md-2 offset-1">
           <input type="text" onkeyup="multiplyValues('reject_pcs','reject_kg','reject_total')" id="reject_pcs" />
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>X</p>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('reject_pcs','reject_kg','reject_total')" id="reject_kg" />
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>=</p>
        </div>
        <div class="col-md-2">
           <input type="text" id="reject_total" />
        </div>
      </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>TULANG @ KG</h5>
        </div>
        <div class="col-md-3 offset-9">
         <p>TOTAL WEIGHT @ KG</p>
        </div>
     </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2 offset-9">
           <input type="text" id="pcs"/>
        </div>
     </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>SHORTBLAST BY : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
        <div class="col-md-2 offset-3">
          <button type="button" class="form-control btn btn-outline-dark" style="transition: 1s;">SHOTBLAST</button>
        </div>
      </div>
      <br>
    </div>
    </div>
  </div>
</div>    
@endsection