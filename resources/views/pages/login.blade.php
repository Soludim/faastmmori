<form method="post" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>