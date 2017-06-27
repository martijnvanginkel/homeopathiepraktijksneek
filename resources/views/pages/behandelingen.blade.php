@extends('main')

@section('content')

@include('partials._bannerphoto')

<div class="contentWrapper">

  <div class="row">
    <div class="col-md-12">
      <h1 class="mainHeader">{{$behandelingen->title}}</h1>
      <p>{!! nl2br(e($behandelingen->paragraphOne)) !!}</p>
    </div>
  </div>

</div>

<div id="behandelingenWrapper" style="background-color:#ADD8E6">
  <div class="row">
    <div class="col-lg-4" >
      <div class="behandelingenBlock">
        @include('icons._bean')
        <h1 class="mainHeader">{{$behandelingen->blockOneTitle}}</h1>
          <p>{!! substr(nl2br(e($behandelingen->blockOneInfo)), 0, $blockTextLength) !!} {!! strlen($behandelingen->blockOneInfo) > $blockTextLength ? "..." : "" !!}</p>
          <a href="/behandeling_1" class="leesmeerButton">Lees meer</a>
      </div>
    </div>
    <div class="col-lg-4" >
      <div class="behandelingenBlock">
        @include('icons._spa')
        <h1 class="mainHeader">{{$behandelingen->blockTwoTitle}}</h1>
          <p>{!! substr(nl2br(e($behandelingen->blockTwoInfo)), 0, $blockTextLength) !!} {!! strlen($behandelingen->blockTwoInfo) > $blockTextLength ? "..." : "" !!}</p>
          <a href="/behandeling_2" class="leesmeerButton">Lees meer</a>
      </div>
    </div>
    <div class="col-lg-4" >
      <div class="behandelingenBlock">
        @include('icons._yinyang')
        <h1 class="mainHeader">{{$behandelingen->blockThreeTitle}}</h1>
          <p>{!! substr(nl2br(e($behandelingen->blockThreeInfo)), 0, $blockTextLength) !!} {!! strlen($behandelingen->blockThreeInfo) > $blockTextLength ? "..." : "" !!}</p>
          <a href="/behandeling_3" class="leesmeerButton">Lees meer</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4">
      <div class="behandelingenBlock">
        @include('icons._stones')
        <h1 class="mainHeader">{{$behandelingen->blockFourTitle}}</h1>
          <p>{!! substr(nl2br(e($behandelingen->blockFourInfo)), 0, $blockTextLength) !!} {!! strlen($behandelingen->blockFourInfo) > $blockTextLength ? "..." : "" !!}</p>
          <a href="/behandeling_4" class="leesmeerButton">Lees meer</a>
      </div>
    </div>
  </div>
</div>


@include('partials._meerontdekken2')

@endsection
