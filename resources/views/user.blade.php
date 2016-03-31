<form method='POST' action='/random-user'>
    {{ csrf_field() }}
    <input type='number' name='userNum'>
    <input type='submit' value='Submit'>
</form>

@if (isset($userdata))
	@foreach ($userdata as $u)
		<p>{{ $u }}</p>
	@endforeach
@endif