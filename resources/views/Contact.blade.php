@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container">

    <div class="row">
        <div class="col" style="border-style: solid;"> CONTACT FORM
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-1" style="border-style:solid;"> <img class="contact" style="margin-left: 750px; width: 40px; height: 40px;" src="/source/img/unpad.png" alt=""></div>
                <div class="col" style="border-style:solid;">Full Name<input style=" margin-top: 10px; width: 90%;"
                        name="nama" type="name" class="form-control @error('nama') is-invalid @enderror" id="nama"placeholder="Full Name">
                </div>
            </div>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-1" style="border-style:solid;"> <img class="contact"style="margin-left: 750px; width: 40px; height: 40px;" src="/source/img/unpad.png" alt=""></div>
                <div class="col" style="border-style:solid;">Email<input style=" margin-top: 10px; width: 90%;"
                        name="nama" type="name" class="form-control @error('nama') is-invalid @enderror" id="nama"placeholder="Email">
                </div>
            </div>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-1" style="border-style:solid;"> <img class="contact"style="margin-left: 750px; width: 40px; height: 40px;" src="/source/img/unpad.png" alt=""></div>
                <div class="col" style="border-style:solid;">Username Instagram<input style=" margin-top: 10px; width: 90%;"
                        name="nama" type="name" class="form-control @error('nama') is-invalid @enderror" id="nama"placeholder="Username Instagram">
                </div>
            </div>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-1" style="border-style:solid;"> <img class="contact"style="margin-left: 750px; width: 40px; height: 40px;" src="/source/img/unpad.png" alt=""></div>
                <div class="col" style="border-style:solid;">Massage<input style=" margin-top: 10px; width: 90%; height:200px;"
                        name="nama" type="name" class="form-control @error('nama') is-invalid @enderror" id="nama"placeholder="Massage">
                </div>
            </div>
            <div>
                <button>send</button>
            </div>
        </div>
        <div class="col">
            2 of 2
        </div>
    </div>

</div>

@endsection
