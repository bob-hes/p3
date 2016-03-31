@extends('master')

@section('description')

	<h3>Lorem Ipsum Generator</h3>
	<p>
		Create random dummy text to be textual placeholders for developing frontend layouts.
	</p>

	<form method='POST' action='/lorem-ipsum'>
	    {{ csrf_field() }}
	    <div class="form-group">
	    	<label for="paragraphCount">Num. of Paragraphs</label>
		    <input type='number' id="paragraphCount" name='paragraphCount' max="99" min="1" value='5'>
		    <br>
		    
		    <input type='submit' value='Submit'>
		</div>
	</form>

	@if(count($errors) > 0)
	    <div class="alert alert-danger">
	    	<ul>
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
	    </div>
	@endif

@stop



@section('results')


	<div class="col-md-12">
		@if (isset($para))
			@foreach ($para as $p)
				<p>{{ $p }}</p>
			@endforeach
		@endif
	</div>
@stop
