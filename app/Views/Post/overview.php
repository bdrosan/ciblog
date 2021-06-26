<?= $this->extend('layouts\main') ?>
<?= $this->section('content') ?>

<div class="container padding-100">

    <?php if (!empty($posts) && is_array($posts)) : ?>

    <div class="row g-5 mb-4">
        <?php foreach ($posts as $post) : ?>
        <div class="col-lg-4">
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
        <?php endforeach; ?>
    </div>

    <?= $pager->links() ?>

    <?php else : ?>
    <h3>No posts</h3>
    <p>Unable to find any posts for you.</p>
    <?php endif ?>

</div>

<?= $this->endSection() ?>