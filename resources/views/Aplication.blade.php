@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div>
    <div class="fishchecking">
        <h1>Fish Checking </h1>
        <p>Are you still confused by the characteristics of fresh fish? </p>
        <p>Please enter the fish photo below </p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <div class="box1" style="border-style: solid; width: 650px; height: 268px; border-radius:10px;">
                <div>
                    <input type="file" id="file" accept="image/*">
                    <label class="button" for="file">
                    Choose or Drop Picture 
                    </label>
                </div>
            </div>
            <div class="box2" >
                <div>
                    <h5>
                       RESULT
                    </h5>
                    </label>
                </div>
            </div>
        </div>
    </div>
    @endsection
