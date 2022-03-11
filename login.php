<?php require_once'includes/header.php' ?>

<div class="login">
    <h1>Log in</h1>
    <p>No Account? <a href="register.php">Register here!</a></p>

    <form action="./includes/login-inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="Password">
        <button class="btn btn-success" name="submit" type="submit">LOGIN</button>
    </form>
</div>
<?php require_once'includes/footer.php' ?>