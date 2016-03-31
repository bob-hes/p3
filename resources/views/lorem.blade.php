<form method='POST' action='/lorem-ipsum'>
    {{ csrf_field() }}
    <input type='number' name='paraNum'>
    <input type='submit' value='Submit'>
</form>

@if (isset($para))
	@foreach ($para as $p)
		<p>{{ $p }}</p>
	@endforeach
@endif