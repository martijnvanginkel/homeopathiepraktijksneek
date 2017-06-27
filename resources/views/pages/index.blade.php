@extends('main')

@section('content')

<div id="indexBannerPhotoBox">
  <div id="indexBannerTextBox">
    <h1>Homeopathiepraktijk Sneek</h1>
    <h2>Kom in je kracht</h2>
  </div>
  <img src="{{ URL::asset('img/flower.jpg') }}" id="indexBannerPhoto"/>
</div>

<div class="contentWrapper">
  <h1 class="mainHeader">{{$index->title}}</h1>
  <p>{!! nl2br(e($index->paragraphOne)) !!}</p>

  <div class="row">
    <div class="col-lg-6">
      <div id="selfieContainer">
        <img src="{{URL::asset('img/placeholder.png')}}" id="selfie"/>
      </div>
    </div>
    <div class="col-lg-6">
      <h1 class="mainHeader">{{$index->titleTwo}}</h1>
        <p>{!! nl2br(e($index->paragraphTwo)) !!}</p>
    </div>
  </div>
</div>



@include('partials._meerontdekken')

@endsection
