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
<body>

    <ul>
        <?php foreach($task as $title => $val) : ?>
        <li>
            <strong>
               <?= $title . ":"?> 
            </strong>
            <strong>
                <?= $val ?>
            </strong>
        </li>
        <?php endforeach ?>
    </ul>
    
    
</body>
</html>