@extends('main')

@section('content')

<div class="bannerPhotoBox">
 	<img src="{{ URL::asset('storage/behandelings/behandeling2.jpg') }}" class="bannerPhoto" />
</div>

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockOneTitle}}</h1>
	<p>{{ $behandelingen->blockOneInfo }}</p>

</div>


@include('partials._meerontdekken2')

@endsection