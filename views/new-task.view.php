<?php require 'partials/head.php'?>
<h2>You have added '<em><?= $description?></em>' to the database!</h2>

<hr>

    <?php foreach($tasks as $task) : ?>
    <?php if($task->completed){
        $isCompleted = '&#10004;';
    } else {
        $isCompleted = "&#10060;";
    }
    ?>
    <li><?= $task->description; ?><?= $isCompleted; ?></li>
    <?php endforeach; ?>
<?php require 'partials/footer.php'?>
