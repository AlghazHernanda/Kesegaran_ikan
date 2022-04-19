@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container about" style=" margin-bottom:30px;">
<div class="row">
    <div class="col US" style=" background-color: #0F6DA0; border-radius:20px; margin-top:10px; margin-bottom:10px;">
      <h2 style="color:white; margin-top:10px;">About US</h2>
      <p>This website is the result of collaboration between the Artificial Intelligence and Big Data Research Center of Padjadjaran University with the Fisheries Office of Lamongan Regency. This website is themed on Fish Freshness where this Website has a good Fish Freshness check feature for consumption.    </p>
    </div>    
<p>
        TEAM RESEARCHER
    </p>
    <div class="row" style="">
        <div class="col about" style="text-align: center;">
            <img src="/source/img/Kosong.png" alt="">
            <p>-</p>
        </div>
        <div class="col about" style="text-align: center;">
            <img src="/source/img/Kosong.png" alt="">
            <p>-</p>
        </div>
        <div class="col about" style="text-align: center;">
            <img src="/source/img/Kosong.png" alt="">
            <p>-</p>
        </div>
    </div>
    <div class="row">
        <p>
            TEAM DEVELOPER
        </p>
        <div class="col developer" style="text-align: right; ">
            <img style="margin-right:110px;" src="/source/img/Hilmi.png" alt="">
            <p style="text-align: right; margin-right: 107px;">Muhammad Hilmi Aufarahman</p>
            <p style="text-align: right; margin-right: 140px; font-weight:normal;">Front-End Developer</p>
        </div>
        <div class="col developer" style="text-align: left;">
            <img style="margin-left:110px;" src="/source/img/Alghaz.png" alt="">
            <p style="text-align: left; margin-left:115px">Mohamad Alghaz Hernanda</p>
            <p style="text-align: left; margin-left: 145px; font-weight:normal;">Back-End Developer</p>
        </div>
    </div>
    <a href="/FormKerjasama">
        <button> JOIN US</button>
    </a>
</div>

@endsection
