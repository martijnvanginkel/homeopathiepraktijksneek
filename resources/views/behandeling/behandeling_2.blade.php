@extends('main')

@section('content')

@include('partials._bannerphoto')

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockTwoTitle}}</h1>
	<p>{{ $behandelingen->blockTwoInfo }}</p>

</div>

@include('partials._meerontdekken2')

@endsection