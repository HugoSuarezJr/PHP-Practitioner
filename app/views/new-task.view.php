<?php require 'partials/head.php'?>

<h1>Submit Your New Task</h1>
<form method="POST" action="/tasks">
    <label for="description">Description</label>
    <input name="description">
    <h4>Was this task completed?</h4>
    <input type="checkbox" name="completed" value='true'>
    <label for="completed">Completed</label>
    <input type="checkbox" name="completed" value='false'>
    <label for="completed">Not Completed</label>
    <button type="submit" >Submit</button>

</form>

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
