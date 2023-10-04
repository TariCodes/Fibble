<!DOCTYPE html>
<html>
    <head>
        <title>PHP Example</title>
    </head>
    <body>
        <h1>Sign up</h1>
        <form action="signup.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Sign up">
        </form> 
        <?php
        echo ("Sign in first")
        ?>
    </body>
</html>