@extends('layouts.app')

@section('title','ThanksPage')

@section('css')
    <style>
        html,body{
            margin: 0;
            padding: 0;
        }
        .image{
            width: 100%;
            height: auto;
        }
        
    </style>

@endsection

@section('navbar')
    @include('component.navbar')
@endsection

@section('content')
<div class="container-fluid p-0">
<div class="position-relative">
    <img src="{{asset('assets/aboutUs.jpeg')}}" alt="Background" class="w-100" style="height: 100vh; object-fit: cover;">

    <div class="d-flex flex-column align-items-center position-absolute" style="top: 40%; left: 50%; transform: translate(-50%, -50%);">
        <img src="{{asset('assets/Thanks.png')}}" alt="Thanks" style="width: 600px; height: auto;">

        <h2 class="mt-3 text-center">Thank You for Your Interest</h2>
        <p class="text-center">Our team will contact you within 5 working days</p>
        <a href="{{route('landingPage')}}"><button class="btn text-white fw-bolder mt-2" style="background-color: #04BE02; width: 200px;">BACK TO HOMEPAGE</button></a>
    </div>
</div>

</div>
@endsection


@section('footer')
    @include('component.footer')
@endsection
