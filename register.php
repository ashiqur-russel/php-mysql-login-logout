<?php require_once'includes/header.php' ?>

<div class="register">
    <h1>Register</h1>
    <p>Already have an account? <a href="login.php">Login here!</a></p>

    <form action="./includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
        <button class="btn btn-success" name="submit" type="submit">REGISTER</button>
    </form>
</div>
<?php require_once'includes/footer.php' ?>