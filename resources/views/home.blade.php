@extends('layouts.app')

@section('page-title', 'DC - Home page')

@section('content')

  <div id="jumbotron">
    <div class="container h-100">
      <div class="series-title">Current Series</div>
    </div>
  </div>
  <div class="series">
    <div class="container">
      @foreach ( $comics as $comic)
      <div class="box">
        <div class="card">
          <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
          <div>{{$comic['title']}}</div>
        </div>
      </div>
      @endforeach
      <button class="my-btn primary">Load More</button>
    </div>
  </div>

  <section id="blue-band">
    <div class="container h-100">
      @foreach ( $blueIcons as $icon)
      <div class="link">
        <img src=".." />
        <span>{{$icon['name']}}</span>
      </div>      
      @endforeach  
    </div>
  </section>

@endsection