@extends('main')

@section('content')

@include('partials._bannerphoto')

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockFourTitle}}</h1>
	<p>{{ $behandelingen->blockFourInfo }}</p>

</div>

@include('partials._meerontdekken2')

@endsection