<?php
$request = \Config\Services::request();
$uri = $request->uri;
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand py-3" href="/">CIBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="me-auto"></ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= !$uri->getSegment(1) ? 'active' : '' ?>" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $uri->getSegment(1) === 'blog' ? 'active' : '' ?>" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $uri->getSegment(1) === 'category' ? 'active' : '' ?>"
                        href="/category">Category</a>
                </li>
            </ul>
        </div>
    </div>
</nav>