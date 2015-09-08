<h1>Show user groups </h1>

<div>
    <?php foreach ($groups as $group) : ?>
    <div style="background: #ccc"><?php echo $group->getName(); ?></div>
        <?php foreach ($group->getUsers() as $user) : ?>
            <div style="padding-left: 20px; background: #eee">--- <?php echo $user->getEmail(); ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>