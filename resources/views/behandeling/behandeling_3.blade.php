@extends('main')

@section('content')

@include('partials._bannerphoto')

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockThreeTitle}}</h1>
	<p>{{ $behandelingen->blockThreeInfo }}</p>

</div>

@include('partials._meerontdekken2')

@endsection