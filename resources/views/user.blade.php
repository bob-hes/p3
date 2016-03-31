@extends('master')

@section('description')

	<h3>Random User Generator</h3>
	<p>
		Create random user record data for testing your database. The data can also be exported into an excel spreadsheet just by checking that checkbox.
	</p>

	<form method='POST' action='/random-user'>
	    {{ csrf_field() }}
	    <label for="recordCount">Number of Records</label>
	    <input type='number' id="recordCount" name='recordCount' max="1000" min="1" value="50">
		<br>

	    <label for="export">Export to Excel</label>
	    <input type="checkbox" id="export" name="export">
	    <br>
	    <input type='submit' value='Submit'>
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
		@if (isset($userdata))

		<table class="table">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>City</th>
					<th>State</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($userdata as $user)
					<tr>
					@foreach ($user as $data)
						<td>{{ $data }}</td>
					@endforeach
					</tr>
				@endforeach
			</tbody>
		</table>

		@endif
	</div>
@stop