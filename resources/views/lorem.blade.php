@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method='POST' action='/lorem-ipsum'>
    {{ csrf_field() }}
    <input type='number' name='paragraphCount' max="99" min="1">
    <input type='submit' value='Submit'>
</form>

@if (isset($para))
	@foreach ($para as $p)
		<p>{{ $p }}</p>
	@endforeach
@endif