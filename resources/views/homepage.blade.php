@extends('frontend.layouts.master')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($sliders as  $key => $slider)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{asset('backend-lib/images/sliders/'.$slider->image)}}" class="d-block w-100" alt="..." width="1200" height="400" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{$slider->title}}</h5>
                    <p>{{$slider->status}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<hr/>

<div class="body-color">
    <h3 class="text-center bg-danger">About Us</h3>
    <p class="">
        At first, take greetings on behalf of 4NS ENTERPRISE. You are cordially invited to visit our website.
        4NS ENTERPRISE was established on June, 2019 aiming to sell various types of products online and offline
        both on whole sale basis and to give some more services in different sector. It is importing the
        products from a number of renowned brands of different country .You may have lot more services from
        4NS ENTERPRISE as furnished below:
    </p>

    <br>
    1. Agent Banking and some other banking facilities.
    <br>
    Dutch Bangla Bank-Agent Banking
    <br>
    Station Road,Jautola.
    <br>
    2. Rent a Bus Service.Non A/C bus is available to be rented.
    <br>
    3. Logistic Support for Medical Examination before going abroad.
</div>

@endsection
