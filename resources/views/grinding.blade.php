@extends('index')
@push('title')
    <title>Grinding</title>
@endpush
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
          <h5>GRINDING DATE : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
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
      <br>
      <div class="row">
        <div class="col-md-2 offset-2" style="text-align: center;">
          <p>PCS</p>
        </div>
        <div class="col-md-2 offset-1" style="text-align: center;">
          <p>KG</p>
        </div>
        <div class="col-md-2 offset-1" style="text-align: center;">
          <p>TOTAL WEIGHT</p>
        </div>
      </div>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>BURR : </h5>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('burr_pcs','burr_kg','burr_total')" id="burr_pcs" />
        </div>
        <div class="col-md-1" style="text-align: right;">
           <div>X</div>
        </div>
        <div class="col-md-2">
           <input type="text" id="burr_kg" onkeyup="multiplyValues('burr_pcs','burr_kg','burr_total')" />
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>=</p>
        </div>
        <div class="col-md-2">
           <input type="text" id="burr_total" />
        </div>
      </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>CRACKED : </h5>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('crack_pcs','crack_kg','crack_total')" id="crack_pcs"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <div>X</div>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('crack_pcs','crack_kg','crack_total')" id="crack_kg"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>=</p>
        </div>
        <div class="col-md-2">
           <input type="text" id="crack_total"/>
        </div>
      </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>RUSTY : </h5>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('rusty_pcs','rusty_kg','rusty_total')" id="rusty_pcs"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <div>X</div>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('rusty_pcs','rusty_kg','rusty_total')" id="rusty_kg"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>=</p>
        </div>
        <div class="col-md-2">
           <input type="text" id="rusty_total"/>
        </div>
      </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>BROKEN EARS: </h5>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('broken_pcs','broken_kg','broken_total')" id="broken_pcs"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <div>X</div>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('broken_pcs','broken_kg','broken_total')" id="broken_kg"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>=</p>
        </div>
        <div class="col-md-2">
           <input type="text" id="broken_total"/>
        </div>
      </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>BROKEN BODY</h5>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('broken-b_pcs','broken-b_kg','broken-b_total')" id="broken-b_pcs"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <div>X</div>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('broken-b_pcs','broken-b_kg','broken-b_total')" id="broken-b_kg"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>=</p>
        </div>
        <div class="col-md-2">
           <input type="text" id="broken-b_total"/>
        </div>
      </div>
      <br>
      <div class="row" id="row">
        <div class="col-md-2">
          <h5>NO HOLE : </h5>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('hole_pcs','hole_kg','hole_total')" id="hole_pcs"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <div>X</div>
        </div>
        <div class="col-md-2">
           <input type="text" onkeyup="multiplyValues('hole_pcs','hole_kg','hole_total')" id="hole_kg"/>
        </div>
        <div class="col-md-1" style="text-align: right;">
           <p>=</p>
        </div>
        <div class="col-md-2">
           <input type="text" id="hole_total"/>
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-md-6">
          <h5>GRINDING BY : <input type="text" style="border: none; border-bottom: 1px solid black;"/></h5>
        </div>
        <div class="col-md-2 offset-3">
          <button type="button" class="form-control btn btn-outline-dark" style="transition: 1s;">GRINDING</button>
        </div>
      </div>
      <br>
    </div>
   </div>
   </div>
</div>
@endsection