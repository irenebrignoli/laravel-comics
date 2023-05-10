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
      <div class="box" v-for="(serie, i) in series">
        <SerieCard :image="serie.thumb" :title="serie.series" />
      </div>
      <button class="my-btn primary">Load More</button>
    </div>
  </div>

@endsection