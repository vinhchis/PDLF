<form method="post" action="{{url('auth/get')}}">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <input type="text" name="txtPass">
    <button type='submit'>Add</button>
</form>