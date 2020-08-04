<?php require "header.php"; ?>

    <main>
        <div class="main-wrapper">
            <section class="section-default">
                <h1>SignUp</h1>
                <?php
                    if(isset($_GET['error'])) {
                        if ($_GET['error'] == 'emptyfields') {
                            echo '<p class="signuperror">Fill in all fields!</p>';
                        }
                        else if($_GET['error'] == 'invalidmailuid') {
                            echo '<p class="signuperror">Invalid user and email</p>';
                        }
                        else if($_GET['error'] == 'invalidmail') {
                            echo '<p class="signuperror">Invalid mail</p>';
                        }
                        else if($_GET['error'] == 'invaliduid') {
                            echo '<p class="signuperror">Invalid user</p>';
                        }
                        else if($_GET['error'] == 'passwordcheck') {
                            echo '<p class="signuperror">Invalid password</p>';
                        }
                        else if($_GET['error'] == 'usertaken') {
                            echo '<p class="signuperror">User is already taken!</p>';
                        }
                    }
                    else if(isset($_GET['signup']) == 'success') {
                        echo '<p class="signupsuccess">Signup successfull!</p>';
                    }
                ?>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-2" placeholder="Repeat password">
                    <button type="submit" name="submit-singup" style="cursor:pointer">Sing up</button>
                </form>
            </section>
        </div>
    </main>

<?php require "footer.php"; ?>