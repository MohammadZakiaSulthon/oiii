@extends('pages.master')
@section('style')
@parent
<link rel="stylesheet" href="../assets/css/kuliner.css">
@endsection

@section('content')
<article class="article">
  <div class="article-title-container">
    <h1 class="article-title">beragam aneka makanan khas banyumas</h1>
  </div>
  <div class="foods-container">
    @foreach ($foods as $food)
    <div class="food-item">
      <h2 class="food-title">{{ $food["title"] }}</h2>
      <img src={{"../assets/img/portfolio/$food[image]"}} alt="" class="food-image">
      <p class="food-address">{{$food["address"]}}</p>
      <div class="food-coordinates">{{$food["latlng"]["lat"]}}, {{$food["latlng"]["lng"]}}</div>
      <div class="food-description">{{$food["latlng"]["content"]}}</div>
    </div>
    @endforeach
  </div>
</article>
@endsection