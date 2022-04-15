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
        <form action="/FormKerjasama" method="POST">
            @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div class="box1" style="border-style: solid; width: 650px; height: 395px; border-radius:10px; ">
                    <div style="justify-content: center; align-items: center; right:0; left:0;" >
                       
                        <input style="margin:auto; margin-top: 10px; width: 93%;" name="nama" type="name" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            placeholder="Full Name">
                            @error('nama') 
                            <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                           @enderror
           
                        <input style="margin:auto; margin-top: 10px;  width: 93%" name="address" type="address" class="form-control form-control @error('address') is-invalid @enderror" id="address"
                            placeholder="Address">
                            @error('address') 
                            <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                           @enderror

                        <input style="margin:auto; margin-top: 10px; width: 93%;" name="phonenumber" type="phonenumber" class="form-control form-control @error('phonenumber') is-invalid @enderror" id="phonenumber"
                            placeholder="Phone Number">
                            @error('phonenumber') 
                            <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                           @enderror

                        <input style="margin:auto; margin-top: 10px; width: 93%" name="email" type="email" class="form-control form-control @error('email') is-invalid @enderror"id="tanggallahir"
                        placeholder="Email">
                        @error('email') 
                        <div class="invalid-feedback">
                         {{ $message }}
                        </div>
                       @enderror

                        <input style="margin:auto; margin-top: 10px; width: 93%;" name="agencyname" type="agencyname" class="form-control form-control @error('agencyname') is-invalid @enderror"
                            id="agencyname" placeholder="Agency Name">
                            @error('agencyname') 
                            <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                           @enderror

                        <input style="margin:auto; margin-top: 10px; width: 93%" name="fieldofcooperation" type="fieldofcooperation" class="form-control form-control @error('fieldofcooperation') is-invalid @enderror" id="fieldofcooperation"
                            placeholder="Field of Cooperation">
                            @error('fieldofcooperation') 
                            <div class="invalid-feedback">
                             {{ $message }}
                            </div>
                           @enderror

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                style="margin:auto; margin-top: 10px;">
                            <label class="form-check-label" for="flexCheckDefault" style="margin-top: 10px;">
                            The Personal Data You Have Filled Out Is Correct
                            </label>
                        </div>
                    
                        <button style="border-color: white; margin-left:22px; width: 128px;  margin-top: 20px; background-color :#0F6DA0; color: white;"
                            type="submit" class="btn  btn-border-radius-sm;">Masuk</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection
