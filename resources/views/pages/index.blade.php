@extends('main')

@section('content')

<div class="bannerPhotoBox">
  <div id="indexBannerTextBox">
    <h1>Homeopathiepraktijk Sneek</h1>
    <h2>Kom in je kracht</h2>
  </div>
    <img src="{{ URL::asset('storage/indexes/index.jpg') }} " id="indexBannerPhoto"/>
</div>

<div class="contentWrapper">
  <h1 class="mainHeader">{{$index->title}}</h1>
  <p>{!! nl2br(e($index->paragraphOne)) !!}</p>

  <div class="row">
    <div class="col-lg-5">
      <div id="selfieContainer">
        <img src="{{URL::asset('storage/indexes/index2.jpg')}}" id="selfie"/>
      </div>
    </div>
    <div class="col-lg-7">
      <h1 class="mainHeader">{{$index->titleTwo}}</h1>
        <p>{!! nl2br(e($index->paragraphTwo)) !!}</p>
    </div>
  </div>
</div>



@include('partials._meerontdekken')

@endsection
