<?php require 'partials/header.php'; ?>

<section class="logIn container">
    <form action="log-in.php" method="POST" autocomplete="on">
        <input type="text" name="username" id="username" placeholder="Username" required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <button id="btnLogIn">Log in</button>
    </form>
</section>



<?php require 'partials/footer.php'; ?>