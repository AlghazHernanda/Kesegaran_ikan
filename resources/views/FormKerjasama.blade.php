@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')


<div>
    <div>
        <div class="fishchecking">
            <h1>Cooperation Form</h1>
            <p>Form of cooperation in research of the Unpad Big Data Artificial Intelligence Research Center</p>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div class="box1" style="border-style: solid; width: 650px; height: 395px; border-radius:10px; ">
                    <div style="justify-content: center; align-items: center; right:0; left:0;" >
                        <input style="margin:auto; margin-top: 10px; width: 93%;" type="name" class="form-control" id="nama"
                            placeholder="Full Name">
                        <input style="margin:auto; margin-top: 10px;  width: 93%" type="address" class="form-control" id="address"
                            placeholder="Address">
                        <input style="margin:auto; margin-top: 10px; width: 93%;" type="phonenumber" class="form-control" id="phonenumber"
                            placeholder="Phone Number">
                        <input style="margin:auto; margin-top: 10px; width: 93%" type="email" class="form-control"id="tanggallahir"
                        placeholder="Email">
                        <input style="margin:auto; margin-top: 10px; width: 93%;" type="agencyname" class="form-control"
                            id="agencyname" placeholder="Agency Name">
                        <input style="margin:auto; margin-top: 10px; width: 93%" type="fieldofcooperation" class="form-control" id="fieldofcooperation"
                            placeholder="Field of Cooperation">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                style="margin:auto; margin-top: 10px;">
                            <label class="form-check-label" for="flexCheckDefault" style="margin-top: 10px;">
                            The Personal Data You Have Filled Out Is Correct
                            </label>
                        </div>
                        <button style="border-color: white; margin-left:22px; width: 128px;  margin-top: 20px; background-color :#0F6DA0; color: white;"
                            type="btn-border-radius " class="btn  btn-border-radius-sm;">Masuk</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection
