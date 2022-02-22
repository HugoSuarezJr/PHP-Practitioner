<?php require('partials/head.php'); ?>

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