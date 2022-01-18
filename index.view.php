<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Learning</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body >

<h1>Task for Today</h1>

    <ul>
        <li>
            <strong>Name: <?= $task['title']; ?></strong>
        </li>
        <li>
            <strong>Date: <?= ucwords($task['due']); ?></strong>
        </li>
        <li>
            <strong>Person Responsible: <?= $task['assigned_to']; ?></strong>
        </li>
        <li>
            <strong>Status: </strong>
            <?php if($task['completed']) : ?>
                <span>&#128077</span>
            <?php else : ?>
                <span>&#128078</span>
            <?php endif ?>
        </li>
        <li>
            <strong>Is this an urgent task?: </strong>
            <?php if(! $task['urgent']) : ?>
                <span>No</span>
                <?php else : ?>
                    <strong>YES</strong>
            <?php endif ?>
        </li>
    </ul>
    
</body>
</html>