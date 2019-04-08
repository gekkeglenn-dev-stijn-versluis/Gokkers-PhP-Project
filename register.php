<?php require 'header.php'; ?>

<form class="register_form" action="includes/loginController.php" method="post">
    <input type="hidden" name="type" value="register">
    <div class="form-group">
        <label class="username_label" for="username">username</label>
        <input class="username_input" type="text" name="username" id="username" required>
    </div>

    <div class="form-group">
        <label class="email_label" for="email">email</label>
        <input class="email_input" type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label class="password_label" for="password">password</label>
        <input class="password_input" type="password" name="password" id="password" required>
    </div>

    <div class="form-group">
        <label class="password_label" for="password_confirm">Please confirm your password</label>
        <input class="password_input" type="password" name="password_confirm" id="password_confirm" required>
    </div>

    <div class="from-group alg-voorwaarde">
        <input class="" type="checkbox" name="algemene-voorwaarde" id="algemene-voorwaarde" required>
        <p>Gaat akkoort met de <a href="#">algemen voorwaarden</a></p>
    </div>

    <input class="register_submit" type="submit" value="Register">
</form>
<?php
if (isset($_GET['msg']))
{
    $msg = htmlentities($_GET['msg']);
 echo "<style>
    .error-msg {
    font-size: 2em;
    font-weight: bold;
        color: #E00004;
        text-align: center;
    }
</style>";
echo "<p class='error-msg'>$msg</p>";
}
?>

<?php require 'footer.php'; ?>

