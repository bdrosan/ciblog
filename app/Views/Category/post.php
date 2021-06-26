<?= $this->extend('layouts\main') ?>
<?= $this->section('content') ?>

<div class="container padding-100">

    <?php if ($category) : ?>
    <h4>Posts from "<?= ucfirst($category['name']) ?>"</h4>
    <?php endif ?>

    <?php if ($posts) : ?>
    <div class="row">
        <?php foreach ($posts as $post) : ?>
        <div class="col-lg-4 g-5">
            <div class="card">
                <img src="<?= is_file('/img/post/' . $post['image']) ? '/img/post/' . $post['image'] : '/img/post/default.png' ?>"
                    class="card-img-top" alt="post-image">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($post['title']) ?></h5>
                    <p class="card-text"><?= esc(wordCut($post['description'], 150)) ?></p>
                    <a href="/blog/<?= esc($post['slug'], 'url') ?>">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <?php else : ?>
    <div>No Posts available for this category.</div>
    <?php endif ?>
</div>
<?= $this->endSection() ?>