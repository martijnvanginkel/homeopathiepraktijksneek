@extends('main')

@section('content')

<div class="bannerPhotoBox">
 	<img src="{{ URL::asset('storage/behandelings/behandeling3.jpg') }}" class="behandelingPhoto" />
</div>

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockTwoTitle}}</h1>
	<p>{{ $behandelingen->blockTwoInfo }}</p>

</div>

@include('partials._meerontdekken2')

@endsection