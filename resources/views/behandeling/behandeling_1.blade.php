@extends('main')

@section('content')

@include('partials._bannerphoto')

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockOneTitle}}</h1>
	<p>{{ $behandelingen->blockOneInfo }}</p>

</div>

@include('partials._meerontdekken2')

@endsection