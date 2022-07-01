@extends('index')
@push('title')
    <title>Purchase Order</title>
@endpush
<style>
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
          <h5>CUSTOMER NAME : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>PART NAME : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>MATERIAL : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>PURCHASE ORDER NO : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>ORDER DATE : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-8">
          <h5>CUSTOMER REQUEST DATE : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>ORDERED UNITS : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="row" id="row">
        <div class="col-md-3">
          <h5>UNIT WEIGHT @ 1PCS :</h5>
        </div>
        <div class="col-md-2">
           <input type="text" id="pcs" />
        </div>
      </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-3">
          <h5 style="font-size: 14px;"><b>CAVITIES WEIGHT @ PER MOLD:</b></h5>
        </div>
        <div class="col-md-2">
         <input type="text" onkeyup="multiplyValues('reject_pcs','reject_kg','reject_total')" id="reject_pcs">
        </div>
        <div class="col-md-1" style="text-align: right;">
         <p>X</p>
        </div>
         <div class="col-md-2">
         <input type="text" onkeyup="multiplyValues('reject_pcs','reject_kg','reject_total')" id="reject_kg">
        </div>
        <div class="col-md-1" style="text-align: right;">
         <p>=</p>
        </div>
        <div class="col-md-2">
         <input type="text" id="reject_total">
        </div>
     </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2 offset-3 text-left">
           <p>CAVITIES</p>
        </div>
        <div class="col-md-2 offset-1 text-left">
           <p>UNIT KG</p>
        </div>
        <div class="col-md-3 text-right">
           <p>WEIGHT PER MOLD</p>
        </div>
     </div>
      <br>
      <div class="row">
        <div class="col-md-8">
          <h5>PURCHASE ORDER ISSUED BY : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-8">
          <h5>PURCHASE ORDER APPROVED BY : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
        <div class="col-md-3 offset-1">
          <button type="button" class="form-control btn btn-outline-dark" style="transition: 1s;">PURCHASE ORDER</button>
        </div>
      </div>
      <br>
    </div>
     </div>
   </div>
 </div>
@endsection