<?php require 'header.php'; ?>

<form class="login_form" action="includes/loginController.php" method="post">
    <input type="hidden" name="type" value="login">
    <div class="form-group">
        <label class="email_label" for="email">Email of username</label>
        <input class="email_input" type="text" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label class="password_label" for="password">Password</label>
        <input class="password_input" type="password" name="password" id="password" required>
    </div>

    <input class="login_submit" type="submit" value="login">
</form>

<?php
    if (isset($_GET['msg']))
    {
        echo htmlentities($_GET['msg']);
    }
    require 'footer.php';
?>
