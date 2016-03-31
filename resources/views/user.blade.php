@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method='POST' action='/random-user'>
    {{ csrf_field() }}
    <input type='number' name='recordCount' max="1000" min="1">
    <input type='submit' value='Submit'>
</form>

@if (isset($userdata))
	@foreach ($userdata as $u)
		<p>{{ $u }}</p>
	@endforeach
@endif