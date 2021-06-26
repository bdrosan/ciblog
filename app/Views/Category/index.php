<?= $this->extend('layouts\main') ?>
<?= $this->section('content') ?>

<div class="container padding-100">

    <?php if ($categories) : ?>
        <div class="row">
            <?php foreach ($categories as $category) : ?>
                <div class="col-md-3">
                    <a href="category/<?= $category['slug'] ?>"><?= $category['name'] ?></a>
                </div>
            <?php endforeach ?>
        </div>
    <?php else : ?>
        <div>No Categories Found</div>
    <?php endif ?>

</div>

<?= $this->endSection() ?>