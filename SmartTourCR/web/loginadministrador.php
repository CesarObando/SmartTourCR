<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <?php
        include './recursosreusables/head.php';
        ?>

    </head>

    <body>
        <!-- header -->
        <?php
        include './recursosreusables/header.php';
        ?>

        <!-- login -->
        <div class="login">
            <div class="container">
                <div class="login-body">
                    <div class="login-heading">
                        <h1>Login</h1>
                    </div>
                    <div class="login-info">
                        <form>
                            <input type="text" class="user" name="email" placeholder="Email" required="">
                            <input type="password" name="password" class="lock" placeholder="Password">
                            <input type="submit" name="Sign In" value="Login">
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->

        <!-- footer -->
        <?php
        include './recursosreusables/footer.php';
        ?>

        <!-- //footer -->
    </body>	
</html>