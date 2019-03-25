<?php require 'header.php'; ?>

<form action="includes/loginController.php" method="post">
    <input type="hidden" name="type" value="login">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <input type="submit" value="login">
</form>

<?php require 'footer.php'; ?>
