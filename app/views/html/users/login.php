<div class="help">
	<?php load_partial("menu"); ?>
</div>
<div class="help">
    <?php echo getLink("Register", "users/register") ?> or <?php echo getLink("Recover", "users/recover") ?>
</div>
<div id="login">
    <form action="" method="post" onsubmit="this.login.disabled=true;">
        <input type="hidden" name="action" value="login">
        <label for="username">Email:</label>
            <input type="text" name="email">
        <label for="password">Password:</label>
            <input type="password" name="password">
        <p>
            <input type="submit" name="login" value="Login">
        </p>
    </form>
</div>
