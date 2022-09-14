<?php require 'partials/header.php'; ?>

<?php
    require 'instances-of-objects.php';

    $word = $_GET['word'];

    $conn = $conn->connect();

    $sql = "select word_id, concat(ifnull(article,''),' ',word) as articleword from words where left(replace(replace(word,'¿',''),'¡',''),1) = '{$word}' order by word;";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
?>

<section class="word container">

    <?php foreach($result as $x): ?>
            <p class="wordForTranslate"><?php echo $x->articleword; ?></p>
            <?php if(isset($_SESSION['userId'])): ?>
                <i class="fas fa-trash-alt" data-word-id=<?php echo $x->word_id ?>></i>
            <?php endif; ?>
    <?php endforeach; ?>

    <p id="translate"></p>

</section>

<script>
    $(document).ready(function(){
        $('.wordForTranslate').on('click',function(){
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

    $(document).ready(function(){
        $('#btnX').on('click',function(){
            $('#translate').css('display','none');
            $('footer').css('display','flex');
        });
    });

    $(document).ready(function(){
        $('.fas').on('click',function(){
            var wordId = $(this).data('word-id');
            //alert(wordId);
            $.ajax({
                url: 'delete.php',
                method: 'POST',
                data: {
                    wordId: wordId
                },
                success: function(data){
                    alert(data);
                    location.reload();
                }
            });
        });
    });
</script>

<?php require 'partials/footer.php'; ?>