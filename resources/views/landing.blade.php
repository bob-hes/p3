@extends('master')

@section('description')
	<h2>
		Developer's Best Friend
	</h2>
	<p>
		In developing sites, having dummy data would help in filling up elements for checking spacing and layout fit. Dummy data would also be great for QA database servers. Below and above, you will find links to a Lorem Ipsum Generator and a Random User Generator for those purposes. Made by Bob Saludo.
	</p>
@stop



@section('results')
	<div class="col-md-6">
		<h2>
			<a href="/lorem-ipsum">Lorem Ipsum Generator</a>
		</h2>
		<p>
			Sometimes in web design, you need to fill in those div and p blocks with text, but you have no content yet. This Lorem Ipsum Generator will create fill-in text you can copy and paste as textual placeholders for design.
		</p>
	</div>
	<div class="col-md-6">
		<h2>
			<a href="/random-user">Random User Generator</a>
		</h2>
		<p>
			You want to test your database, but you have no data records. Also, manually making up records is tedious, and you want to have a lot of data. Why not use this Random User Generator to fill your database with placeholder records.
		</p>
	</div>
@stop
