@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')


<div>
    <div>
        <div class="fishchecking">
            <h1>Form Collaboration </h1>
            <p>Form of cooperation in research of the Unpad Big Data Artificial Intelligence Research Center</p>
        </div>
    </div>
    <div class="container" style="margin-bottom: 15px;">
        <form action="/FormKerjasama" method="POST">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <div class="box1"
                        style="border-style: solid; border-color:#C4C4C4; width: 650px; height: auto; border-radius:10px; ">
                        <div style="justify-content: center; align-items: center; right:0; left:0;">

                            <input style="margin:auto; margin-top: 10px; width: 93%; border-radius:10px;" name="nama"
                                type="name" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                placeholder="Full Name">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            <input style="margin:auto; margin-top: 10px;  width: 93% ;   border-radius:10px;"
                                name="address" type="address"
                                class="form-control form-control @error('address') is-invalid @enderror" id="address"
                                placeholder="Address">
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            <input style="margin:auto; margin-top: 10px; width: 93%; border-radius:10px;"
                                name="phonenumber" type="phonenumber"
                                class="form-control form-control @error('phonenumber') is-invalid @enderror"
                                id="phonenumber" placeholder="Phone Number">
                            @error('phonenumber')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            <input style="margin:auto; margin-top: 10px; width: 93% ; border-radius:10px;" name="email"
                                type="email" class="form-control form-control @error('email') is-invalid @enderror"
                                id="tanggallahir" placeholder="Email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            <input style="margin:auto; margin-top: 10px; width: 93%; border-radius:10px;"
                                name="agencyname" type="agencyname"
                                class="form-control form-control @error('agencyname') is-invalid @enderror"
                                id="agencyname" placeholder="Agency Name">
                            @error('agencyname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror



                            <select id="fieldofcooperation" name="fieldofcooperation"
                                style=" margin-top: 10px; width: 93% ;  border-radius:10px;margin-left:22px;  height: 38px; padding-left:9px; border-color:#C4C4C4; color:#6c757d;">
                                Field of Collaboration
                                <option value=""> Field of Collaboration</option>
                                <option value="Research"> Research </option>
                                <option value=" Developer"> Developer </option>
                                <option value="Sponsors"> Sponsors </option>
                            </select>

                            <button
                                style="border-color: white; margin-left:22px; width: 128px;  margin-top: 20px; background-color :#0F6DA0; color: white; margin-bottom:35px;"
                                type="submit" class="btn  btn-border-radius-sm;">JOIN</button>
        </form>
    </div>

</div>
</div>
</div>


@endsection
