<?php require 'header.php'; ?>

<form action="includes/loginController.php" method="post">
    <input type="hidden" name="type" value="register">
    <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" id="username" required>
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div class="form-group">
        <label for="password_confirm">Please confirm your password</label>
        <input type="password" name="password_confirm" id="password_confirm" required>
    </div>

    <div class="from-group">
        <input type="checkbox" name="algemene-voorwaarde" id="algemene-voorwaarde" required>
        <p>Gaat akkoort met de <a href="#">algemen voorwaarden</a></p>
    </div>

    <input type="submit" value="Register">
</form>

<?php require 'footer.php'; ?>

