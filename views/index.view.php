<?php require('partials/head.php'); ?>

<h1>Submit Your New Task</h1>

<form method="POST" action="/new-task">
    <input name="description">
    <h4>Was this task completed?</h4>
    <input type="checkbox" name="completed" value='true'>
    <label for="completed">Completed</label>
    <input type="checkbox" name="completed" value='false'>
    <label for="completed">Not Completed</label>
    <button type="submit" >Submit</button>

</form>
<?php require('partials/footer.php'); ?>