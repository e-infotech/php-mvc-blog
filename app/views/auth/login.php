<?php $title = 'Login'; ?>

<?php ob_start(); ?>
<h1>Login</h1>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= $error ?></p>
<?php endif; ?>

<form action="/login" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>

<p>Don't have an account? <a href="/register">Register here</a></p>

<?php $content = ob_get_clean(); ?>

<?php require 'app/views/layouts/main.php'; ?>
