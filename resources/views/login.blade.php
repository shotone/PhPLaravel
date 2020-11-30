<form method="post" action="{{route('post_login')}}">
    @csrf
    <div class="form-group">
        <label>username</label>
        <input type="text" name="name" class="form-control">
        <label>password</label>
        <input type="password" name="password" class="form-control">
        <button type="submit">Login</button>
    </div>


</form>
