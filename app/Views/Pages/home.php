<?= $this->extend('layouts\main') ?>

<?= $this->section('content') ?>
<section id="hero-image" class="no-margin">
    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">Welcome to CIBlog</h1>
            <p>Made with codeigniter 4 & it is extremely light</p>
            <button class="btn btn-primary text-uppercase">Get It Now</button>
        </div>
    </div>
</section>
<section id="info-icon">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-lightning" viewBox="0 0 16 16">
                        <path
                            d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z" />
                    </svg>
                    <h3 class="mt-4">Lightning Fast Speed</h3>
                    <p>We provide you super fast loading speed tested on google insight.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                    <h3 class="mt-4">Customizable Design</h3>
                    <p>We provide free counseling for updated admission, visa and other information.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-basket" viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                    </svg>
                    <h3 class="mt-4">On Demand Feature</h3>
                    <p>We assist students with the entire visa application process.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-section">
    <div class="container padding-100">
        <div class="section-title">
            <h2>Categories</h2>
        </div>

        <?php if (!empty($categories) && is_array($categories)) : ?>
        <div class="row">

            <?php foreach ($categories as $category) : ?>
            <div class="col-md-4">
                <div class="bg-white mb-3">
                    <a href="/category/<?= $category['slug'] ?>">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="https://via.placeholder.com/100" alt="Study in Malaysia">
                            </div>
                            <div class="col-8">
                                <h5 class="mb-0"><?= $category['name'] ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center; margin:20px 0 auto">
            <a href="/category">All Categories</a>
        </div>

        <?php else : ?>
        <h3>No Categories Found</h3>
        <?php endif ?>
    </div>
</section>
<section>
    <div class="container overflow-hidden">
        <div class="section-title">
            <span>Blog</span>
            <h2>Featured News on Study Abroad</h2>
        </div>

        <?php if (!empty($posts) && is_array($posts)) : ?>

        <div class="row g-5 mb-4">
            <?php foreach ($posts as $post) : ?>
            <div class="col-lg-4">
                <div class="card shadow">
                    <a href="/blog/<?= esc($post['slug'], 'url') ?>" class="zoom-container">
                        <img src="<?= is_file('/img/post/' . $post['image']) ? '/img/post/' . $post['image'] : '/img/post/default.png' ?>"
                            class="card-img-top zoom" alt="post-image">
                    </a>
                    <div class="card-body p-4">
                        <p class="text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <?= date('d M Y') ?>
                        </p>
                        <h5 class="card-title mb-3"><a
                                href="/blog/<?= esc($post['slug'], 'url') ?>"><?= esc($post['title']) ?></a></h5>
                        <p class="card-text"><?= esc(wordCut($post['description'], 150)) ?></p>
                        <a href="/blog/<?= esc($post['slug'], 'url') ?>">Read More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php else : ?>
        <h3>No posts Found</h3>
        <?php endif ?>
    </div>
</section>
<section class="m-0 p-5 bg-calltoaction text-white">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-9 d-flex align-items-center">
                <h2 class="mb-0 fw-lighter">Want to get this lightning fast blog?</h2>
            </div>
            <div class="col-md-3">
                <button class="btn btn-theme text-uppercase">Call Us Now</button>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>