@extends('errors.layout')

@section('error_content')
	<div class="noise"></div>
	<div class="overlay"></div>
	<div class="terminal">
		<h1>Error <span class="errorcode">500</span></h1>
		<p class="output">Error :(</p>
		<p class="output">It's always time for a coffee break.</p>
		<p class="output">We should be back by the time you finish your coffee.</p>
	</div>
@endsection
