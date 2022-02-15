<?php require('partials/head.php'); ?>

<h1>Submit Your New Task</h1>

<form method="POST" action="/new/task">
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

<h2>Create a new user</h2>
<form method="POST" action="/users">
    <label for="name">Name</label>
    <input name="name">
    <button type="submit" >Submit</button>
</form>
<h3>Users</h3>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>