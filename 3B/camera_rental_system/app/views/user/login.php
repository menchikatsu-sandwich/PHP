<h2>Login</h2>
<form action="<?= BASEURL ?>/user/login" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">Login</button>
</form>
<p>Don't have an account? <a href="<?= BASEURL ?>/user/register">Register here</a></p>
