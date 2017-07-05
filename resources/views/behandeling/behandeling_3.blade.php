@extends('main')

@section('content')

<div class="bannerPhotoBox">
 	<img src="{{ URL::asset('storage/behandelings/behandeling4.jpg') }}" class="behandelingPhoto" />
</div>

<div class="contentWrapper">

	<h1 class="mainHeader">{{$behandelingen->blockThreeTitle}}</h1>
	<p>{{ $behandelingen->blockThreeInfo }}</p>

</div>

@include('partials._meerontdekken2')

@endsection