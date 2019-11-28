@extends('layouts.app')
{{-- @extends('layouts.master') --}}
{{-- add section to avoid content above the nav bar --}}

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" style="50%" src="{{ asset('img/arche.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</h5>
                <p>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</p>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/cyber.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</h5>
                <p>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</p>
            </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/blur.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</h5>
                <p>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</p>
            </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  {{-- for a new div --}}

  <br><br>

    <div class="bd-callout bd-callout-warning text-center">
        <div class="container">
            <h5>THE POWER OF YOUNG PEOPLE</h5>
            <h5>CHANGING THE WORLD BY UNLOCKING CHANGING THE WORLD BY UNLOCKING PEOPLE</h5>
            <h5>THE POWER OF YOUNG PEOPLE</h5>
            <h5>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</h5>
            <h5>CHANGING THE WORLD BY UNLOCKING THE POWER OF YOUNG PEOPLE</h5>
        </div>
    </div>
    <br><br>
    {{-- text section --}}

    <div class="container">
        <div class="card-deck">
                <div class="card text-center" style="border-left-color: 2px solid green;">
                    <div class="card-body">
                        <h5 class="card-title">SIGN UP AS A YOUTH</h5>
                        <p class="card-text"></p>
                    <button class="btn btn-primary btn-lg"><a href="#">SIGN UP</a></button>
                    </div>
                </div>
                
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">SIGN UP AS NGO</h5>
                    <p class="card-text"></p>
                    <button class="btn btn-primary btn-lg"><a href="#">SIGN UP</a></button>
                </div>
            </div>
        </div>
    </div>
    {{-- for news update --}}
    <br><br>
    <div class="container">
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('img/lagos.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> NEWS UPDATE</h5>
                <blockquote>" TEXT TEXT"</blockquote>
                <button class="btn btn-primary btn-lg">MORE</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('img/lagos.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">NEWS UPDATE</h5>
                <blockquote>" TEXT TEXT"</blockquote>
                <button class="btn btn-danger btn-lg">MORE</button>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('img/lagos.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">NEWS UPDATE</h5>
                <blockquote>" TEXT TEXT"</blockquote>
                <button class="btn btn-primary btn-lg">MORE</button>
              </div>
            </div>
        </div>
    </div>
@endsection