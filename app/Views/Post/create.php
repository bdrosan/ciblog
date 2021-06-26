<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>

<div class="container padding-100">

    <?= \Config\Services::validation()->listErrors() ?>
    <a href="/blog" class="btn btn-info">Go Back</a>
    <form action="/blog/create" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="input" class="form-control" name="title" />
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="tiny"></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Create news item" />
    </form>

</div>

<?= $this->endSection() ?>