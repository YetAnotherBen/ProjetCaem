<!--CALLING THE DEFAULT LAYOUT-->
@extends('layouts.default')
<!------------------------------>


<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Crédits
@endsection
<!---------------->


<!--MAIN CONTENT :-->
@section('pageContent')
<main class="container mainCredits">
	<h2>Contenu :</h2><p>Lucie Anaclet</p>
	<h2>Développement et intégration :</h2><p>Yves Tannier / TanLab / ACS Besançon</p>

	<h2>Le site Internet du CAEM est réalisé exclusivement avec des logiciels libres. Entre autres :</h2>
	<ul>
		<li>Laravel</li>
		<li>Backpack</li>
		<li>Twitter Bootstrap</li>
	</ul>
<!--	<img src="{{ asset('images/logo_CAEM.svg')}}" alt="logo CAEM">-->

	<img src="{{ url('images/200x200/item-02.png') }}">
</main>
@endsection
