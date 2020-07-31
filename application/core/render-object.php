<h1><?=$data['title']?></h1>

<?php foreach ($data['objects'] as $name => $index): ?>
<?php //var_dump($index['number']); ?>
    <form action="/portfolio/delete" method="post">
    <input type="hidden" value="<?= $index['id']?>" name="id">
    <input type="submit" value="Удалить">
<!--    <a href="/portfolio/delete?id=--><?//=$index['id']?><!--">Удалить</a>-->
<!--    <a href="/portfolio/update_form?id=--><?//=$index['id']?><!--">Update</a>-->
</form>
<form action="/portfolio/update_form" method="post">
    <input type="hidden" value="<?= $index['id'] ?>" name="id">
    <input type="hidden" value="<?= $index['name'] ?>" name="name">
    <input type="hidden" value="<?= $index['number'] ?>" name="number">
    <input type="submit" value="Обновить">
</form>
    <?php foreach ($index as $name => $value): ?>
        <strong><?= $name ?></strong>: <?= $value ?>
    <br>

    <?php endforeach; ?>
    <hr>
<?php endforeach; ?>

