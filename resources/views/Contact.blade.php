
@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container">

    <div class="row" style="margin-top: 20px; margin-bottom: 15px;">
        <div class="col" style="border-color: rgba(15, 109, 160, 0.12); border-radius: 10px ; background: rgba(15, 109, 160, 0.12);">
            <h1>CONTACT FORM</h1>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-2"> <img class="contact" style=" margin-top: 34px; width: 40px; height: 40px;"
                        src="/source/img/profil.png" alt=""></div>
                <div class="col">Full Name<input style=" margin-top: 10px; width: 90%;" name="nama" type="name"
                        class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Full Name">
                </div>
            </div>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-2"> <img class="contact" style=" margin-top: 30px; width: 40px; height: 40px;"
                        src="/source/img/mail2.png" alt=""></div>
                <div class="col">Email<input style=" margin-top: 10px; width: 90%;" name="nama" type="name"
                        class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Email">
                </div>
            </div>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-2"> <img class="contact" style=" margin-top: 32px; width: 40px; height: 40px;"
                        src="/source/img/ig.png" alt=""></div>
                <div class="col">Username Instagram<input style=" margin-top: 10px; width: 90%;" name="nama" type="name"
                        class="form-control @error('nama') is-invalid @enderror" id="nama"
                        placeholder="Username Instagram">
                </div>
            </div>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-2"> <img class="massage" style=" margin-top:70px ;width: 40px; height: 40px;"
                        src="/source/img/mail.png" alt=""></div>
                <div class="col">Massage<input style=" margin-top: 10px; width: 90%; height:150px;" name="nama"
                        type="name" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        placeholder="Massage">
                </div>
            </div>
            <div class="" style="margin-left:55px; margin-bottom: 10px; ">
                <button style="width: 519px; height: 47px; background: #0F6DA0; border-radius: 10px ;">send</button>
            </div>
        </div>
        <div class="col">
            <div class="col" style=" padding:60px; margin-top: 150px; ">
                <div class="col"
                    style="border-style: solid; border-radius: 10px ;border-color: rgba(15, 109, 160, 0.12); background: rgba(15, 109, 160, 0.12);">
                    <div class="row" style="margin:10px;">
                        <div class="col-6 col-md-2"> <img class="contact" style=" width: 30px; height: 40px;"
                                src="/source/img/location.png" alt=""></div>
                        <div class="col ">
                            <a style="margin-top: 200px;"> Universitas Padjadjaran </a>
                            <p>Gedung Rektorat Unpad Kampus
                                Jatinangor Jln. Ir. Soekarno km. 21
                                Jatinangor, Kab.Sumedang 45363
                                Jawa Barat
                                Telepon (022) 842 88888
                                Faksimile (022) 842 88898
                                email:humas@unpad.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection