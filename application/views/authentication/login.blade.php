{{ $header }}
<form class="form-signin" action="/authentication/login">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input name="username" type="text" class="input-block-level" placeholder="Email address">
    <input name="password" type="password" class="input-block-level" placeholder="Password">
    <label class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    <button class="btn btn-large btn-primary" type="submit">Sign in</button>
</form>
{{ $footer }}