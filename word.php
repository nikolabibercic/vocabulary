<?php require 'partials/header.php'; ?>

<?php
    $word = $_GET['word'];

    $conn = new PDO("mysql:host=localhost;dbname=vocabulary",'root','');
    $sql = "select * from words where left(word,1) = '{$word}' order by word;";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
?>

<section class="word container">

    <?php foreach($result as $x): ?>
        <p value=<?php echo $x->word_id; ?>><?php echo $x->word; ?></p>
    <?php endforeach; ?>

    <p id="translate"></p>

</section>

<script>
    $(document).ready(function(){
        $('p').on('click',function(){
            $('#translate').css('display','block');
            $('footer').css('display','none');
            var wordForTranslate = $(this).text();
            //$('#translate').html(wordForTranslate);
            $.ajax({
                url: 'translate.php',
                method: 'POST',
                data:{
                    wordForTranslate: wordForTranslate
                },
                success: function(data){
                    $('#translate').html(data);
                }
            });
        });
    });
</script>

<?php require 'partials/footer.php'; ?>