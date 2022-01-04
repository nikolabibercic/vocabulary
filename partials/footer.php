
    <footer>
        <p>spanskirecnik.rs &copy; All rights reserved.</p>
        <?php if(!isset($_SESSION['userId'])): ?>
            <a href="log-in-view.php"><i class="fas fa-sign-in-alt"></i></a>
        <?php endif; ?>
        <?php if(isset($_SESSION['userId'])): ?>
            <a href="log-out.php"><i class="fas fa-sign-out-alt"></i></a>
        <?php endif; ?>
    </footer>
</body>
</html>