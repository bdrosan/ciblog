<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<div class="container padding-100">

    <h2><?= esc($post['title']) ?></h2>
    <?= $post['image'] ? '<img src="/img/post/' . $post['image'] . '" alt="">' : ''; ?>
    <p><?= $post['description'] ?></p>

</div>

<?= $this->endSection() ?>