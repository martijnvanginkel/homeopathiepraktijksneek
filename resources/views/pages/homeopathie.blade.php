@extends('main')

@section('content')

@include('partials._bannerphoto')

<div class="contentWrapper">
  <h1 class="mainHeader">{{$homeopathie->title}}</h1>

  <p>{!! nl2br(e($homeopathie->paragraphOne)) !!}</p>

  <div class="row">
    <div class="col-md-8">
      <div class="homeopathiePictureContainer">
        <img src="{{URL::asset('img/placeholder.png')}}" class="homeopathiePicture">
      </div>
    </div>
    <div class="col-md-4">
      <hr>
      <p class="pictureText">{{$homeopathie->photoText}}</p>
    </div>
  </div>

  <p>{!! nl2br(e($homeopathie->paragraphTwo)) !!}</p>

</div>

@include('partials._meerontdekken')

@endsection
