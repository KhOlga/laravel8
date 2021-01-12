@extends('errors.layout')

@section('error_content')
	<div class="noise"></div>
	<div class="overlay"></div>
	<div class="terminal">
		<h1>Error <span class="errorcode">403</span></h1>
		<p class="output">Access Denied. You Do Not Have The Permission To Access This Page On This Server.</p>
		<p class="output">Please try to <a href="{{ url()->previous() }}">go back</a> or <a href="{{ route('welcome') }}">return to the homepage</a>.</p>
		<p class="output">Have a nice day.</p>
	</div>
@endsection
