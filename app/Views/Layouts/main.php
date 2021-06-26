<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= isset($title) ? esc($title) : 'CIBlog' ?></title>
</head>

<body>
    <?= $this->include('layouts\navbar') ?>

    <?= $this->renderSection('content') ?>
    <section class="footer-top-area padding-100 no-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-widget">

                        <h5>CIBlog</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas minima, natus iure magnam
                            voluptas quo facilis doloribus laboriosam quos earum, ea eos corrupti asperiores tempore qui
                            excepturi numquam reiciendis odit.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6">
                    <div class="single-widget">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="/home">Home</a>
                            </li>
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <a href="/blog">Blog</a>
                            </li>
                            <li>
                                <a href="/contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6">
                    <div class="single-widget">
                        <h5>Important</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="contact.php">Scholarship</a>
                            </li>
                            <li>
                                <a href="#">Articles</a>
                            </li>
                            <li>
                                <a href="#">Edu Fair</a>
                            </li>
                            <li>
                                <a href="#">Events</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="single-widget">
                        <h5>Newsletter</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Your Email Address"
                                aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-bottom-area">
        <div class="container">
            <div class="text-white">&copy; <?= date('Y') ?> CIBlog. All Rights Reserved</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.tiny.cloud/1/l4701iup9r3zm1fhdi4poigbfsbimanpqaz40jxiqwzrbtz7/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: 'textarea#tiny',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });
    </script>
</body>

</html>