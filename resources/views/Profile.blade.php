@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container profile Perikanan AIDA" style=" margin-top:120px; margin-bottom: 116px;">
    <div class="row ">
        <div class="col perikanan" style=" text-align: center; ">
            <img style="width:156px; height:200px; margin-left:300px; float: none; " src="/source/img/LogoPerikanan.png"
                alt="">
        </div>
        <div class="col AIDA" style=" text-align: center;">
            <img style="width: 256px;height: 201.16px; margin-right:300px; float: none;" src="/source/img/LogoAIDA.png"
                alt="">
        </div>
    </div>
    <div class="row">
        <div class="col perikanan" style=" text-align: center; ">
            <a style="text-decoration: none;" href="source/pdf/Lamongan.pdf">
                <p style="float:right; margin-right:100px;">VIEW PROFILE</p>
            </a>
        </div>
        <div class="col AIDA" style=" text-align: center;">
            <a style="text-decoration: none;" href="source/pdf/AIDA.pdf">
                <p style="float:left;margin-left:110px;">VIEW PROFILE</p>
            </a>
        </div>
    </div>
</div>

@endsection
