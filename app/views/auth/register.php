<?php $title = 'Register'; ?>

<?php ob_start(); ?>
<h1>Register</h1>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= $error ?></p>
<?php endif; ?>

<form action="/register" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>

<p>Already have an account? <a href="/login">Login here</a></p>

<?php $content = ob_get_clean(); ?>

<?php require 'app/views/layouts/main.php'; ?>
