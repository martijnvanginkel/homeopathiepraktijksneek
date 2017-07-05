@extends('main')

@section('content')

<div class="bannerPhotoBox">
 	<img src="{{ URL::asset('storage/behandelings/behandeling5.jpg') }}" class="behandelingPhoto" />
</div>

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockFourTitle}}</h1>
	<p>{{ $behandelingen->blockFourInfo }}</p>

</div>

@include('partials._meerontdekken2')

@endsection