@extends('layouts.default')
@section('preview')

<div id="previewCarousel" class="carousel slide bg-dark" data-ride="carousel">
  <ol class="carousel-indicators">
    <li style="width: 10px; height: 10px; border-radius: 100%" data-target="#previewCarousel" data-slide-to="0" class="active"></li>
    <li style="width: 10px; height: 10px; border-radius: 100%" data-target="#previewCarousel" data-slide-to="1"></li>
    <li style="width: 10px; height: 10px; border-radius: 100%" data-target="#previewCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="data_file/1597981802_IMG-20200815-WA0009.jpg" class="d-block w-100" alt="..." style="object-fit: contain; height: 50vh">
      <div class="carousel-caption d-none d-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="data_file/1597980295_IMG-20200815-WA0014.jpg" class="d-block w-100" alt="..." style="object-fit: contain; height: 50vh">
      <div class="carousel-caption d-none d-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="data_file/1597981780_IMG-20200815-WA0012.jpg" class="d-block w-100" alt="..." style="object-fit: contain; height: 50vh">
      <div class="carousel-caption d-none d-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#previewCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#previewCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@stop
