<?php require "header.php"; ?>

    <main>
        <div class="main-wrapper">
            <section class="section-default">
                <h1>SignUp</h1>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-2" placeholder="Repeat password">
                    <button type="submit" name="submit-singup">Sing up</button>
                </form>
            </section>
        </div>
    </main>

<?php require "footer.php"; ?>