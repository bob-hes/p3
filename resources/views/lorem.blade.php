<form method='POST' action='/lorem-ipsum'>
    {{ csrf_field() }}
    <input type='number' name='paraNum'>
    <input type='submit' value='Submit'>
</form>