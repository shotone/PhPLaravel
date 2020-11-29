<form method="post" action="{{route('post_login')}}">
    @csrf
    <div class="form-group">
        <label>username</label>
        <input type="text" name="name" class="form-control">
        <label>password</label>
        <input type="password" name="password" class="form-control">
        <button type="submit">Login</button>
    </div>

    <div class="form-group">
        <label>Register</label>
        <a href="{{ route('register_view') }}" class="text-sm text-gray-700 underline">Register</a>

    </div>
</form>
