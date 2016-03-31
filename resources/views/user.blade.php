<form method='POST' action='/random-user'>
    {{ csrf_field() }}
    <input type='number' name='userNum'>
    <input type='submit' value='Submit'>
</form>