@extends('shop::layouts.index')

{{-- @section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('shop.name') !!}</p>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">
    <style>
*{
    font-family: 'Poppins',sans-serif;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.icon-nav{
    color: #FFFFFF8C;}
.icon-nav:hover{
    color: white;
}
.notif{
    position: relative;
}
.circle{
    position: absolute;
    width:20px;
    height: 20px;
    border-radius:50%;
    background-color:rgb(247, 156, 37);
    color: white;
    text-align: center;
    font-size: 12px;
    top:-4px;
    right: -15px;

}

/* style footer */
footer{
    position: static;
    bottom: 0;
    background-color: #820300; 
    color: whitesmoke;
}
section{
    min-height:80vh;
}
.d-flex{

}
    </style>
</head>
<body>
    <main>
        <header>
            @include('component.navbar')
        </header>
        <section>
            @yield('content')
        </section>
        <footer>
            @include('component.footer')
        </footer>
    </main>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>

