<?php require 'partials/header.php'; ?>

<?php require 'instances-of-objects.php'; ?>

<?php  if(isset($_SESSION['userId'])): ?>
    <section class="insertForm container">
        <form action="insert.php" method="POST" autocomplete="on">
            <input type="text" placeholder="Nova reč" required>
            <input type="text" placeholder="Prevod" required>
            <button>Sačuvaj</button>
        </form>
    </section>
<?php endif; ?>

    <section class="alphabet container">
        <a href="word.php?word=a">a</a>
        <a href="word.php?word=b">b</a>
        <a href="word.php?word=c">c</a>
        <a href="word.php?word=d">d</a>
        <a href="word.php?word=e">e</a>
        <a href="word.php?word=f">f</a>
        <a href="word.php?word=g">g</a>
        <a href="word.php?word=h">h</a>
        <a href="word.php?word=i">i</a>
        <a href="word.php?word=j">j</a>
        <a href="word.php?word=k">k</a>
        <a href="word.php?word=l">l</a>
        <a href="word.php?word=m">m</a>
        <a href="word.php?word=n">n</a>
        <a href="word.php?word=n">ñ</a>
        <a href="word.php?word=o">o</a>
        <a href="word.php?word=p">p</a>
        <a href="word.php?word=q">q</a>
        <a href="word.php?word=r">r</a>
        <a href="word.php?word=s">s</a>
        <a href="word.php?word=t">t</a>
        <a href="word.php?word=u">u</a>
        <a href="word.php?word=v">v</a>
        <a href="word.php?word=w">w</a>
        <a href="word.php?word=x">x</a>
        <a href="word.php?word=y">y</a>
        <a href="word.php?word=z">z</a>
    </section>
<?php require 'partials/footer.php'; ?>