@extends('main')

@section('content')

<div class="bannerPhotoBox">
    <img src="{{ URL::asset('storage/praktijks/praktijk.jpg') }} " class="bannerPhoto" />
</div>

<div class="contentWrapper">
  <h1 class="mainHeader">{{$praktijk->title}}</h1>

  <p>{!! nl2br(e($praktijk->paragraphOne)) !!}</p>

  <div class="row">
    <div class="col-md-5">
      <div class="homeopathiePictureContainer">
        <img src="{{ URL::asset('storage/praktijks/praktijk2.jpg') }}" class="homeopathiePicture">
      </div>
    </div>
    <div class="col-md-7" style="margin-top:20px">
      <p>{!! nl2br(e($praktijk->paragraphTwo)) !!}</p>
    </div>
  </div>

</div>

@include('partials._meerontdekken')

@endsection
