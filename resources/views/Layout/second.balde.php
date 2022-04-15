<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  {{-- Boostrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  {{-- my stylse --}}
  <link rel="stylesheet" href="{{asset('source/css/navbar.css')}}">
  <link rel="stylesheet" href="{{asset('source/css/footer.css')}}">
  <link rel="stylesheet" href="{{asset('source/css/welcome.css')}}">
  <link rel="stylesheet" href="{{asset('source/css/Aplication.css')}}">

  <title>KESEGARAN IKAN</title>
</head>

<body>

  {{-- manggil navbar di folder partials.navbar --}}
  @include('partials.navbar')

  <div>

    @yield('container') {{-- jadi ini nanti isinya halaman-halaman lain, biar pake boostrap nya 1 aja --}}

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>