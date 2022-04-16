@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div>
    <div>
        <h1>WELCOME</h1>
        <p>Welcome to the Fish Freshness Research Website </p>
        <p>This website will help the public in providing information about </p>
        <p>Fish Freshness </p>
        <div></div>
    </div>
    <div>
        <form action="/Article" method="get">
        <a href="/Article"><button type="button" class="btn1" >Article   </button></a>
        </form>
        <button type="button" class="btn2">Research</button>
    </div>
</div>


@endsection
