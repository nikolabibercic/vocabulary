<?php
    require 'instances-of-objects.php';

    $conn = $conn->connect();
    
    $wordForTranslate = $_POST['wordForTranslate'];

    $sql = "select translate from words where word = '{$wordForTranslate}';";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);

    foreach($result as $x):
?>
    <?php echo $wordForTranslate.'&nbsp&nbsp&nbsp>&nbsp&nbsp&nbsp'.$x->translate; ?>
<?php endforeach; ?>