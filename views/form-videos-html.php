<?php
require_once __DIR__ . '/inicio-html.php'; ?>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2623631126659676"       crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Public/css/quill.css"/>
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Blog Post - Elaine Figueiredo</h1>
                        <p>Inteligência Artificial</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post post-single">
                        <h2 class="post-title">Adicione um Novo Video – :D </h2>
                        <div class="post-meta">
                            <form method="post"
                            <div class="block">
                                <div class="form-group form-group-2">
                                    <input class="input-form"
                                           name="title"
                                           type="text"
                                           value="<?= $video?->title;?>"
                                           placeholder="example: Inteligencia artifical">
                                </div>
                                <div class="form-group form-group-2">
                                    <input class="input-form"
                                           name="description"
                                           type="text"
                                           value="<?= $video?->description; ?>"
                                           placeholder="example: a inteligencia artificial é...">
                                </div>

                                <div class="form-group form-group-2">
                                    <input class="input-form"
                                           name="url"
                                           type="text"
                                           value="<?= $video?->url;?>"
                                           placeholder="example: youtube.com/embeded/JQEioW2dhfasd2w3as4k">
                                </div>
                                <button class="btn btn-default" type="submit">Enviar</button>
                            </div>
                            </form>
                            <link rel="stylesheet" href="/Public/css/quill.css" />

                            <div class="container">
                                <form action="https://httpbin.org/post" method="post">
                                    <div class="form-group">
                                        <label for="name">Display name</label>
                                        <input id="name" name="name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input id="location" name="location" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>About me</label>
                                        <div id="editor"></div>
                                    </div>
                                    <button type="submit">Submit Form</button>
                                    <button type="button" id="resetForm">Reset to Initial Data</button>
                                </form>
                            </div>

                            <script src="/Public/js/quill.js"></script>
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> 26, ABR 2024
                                </li>
                                <li>
                                    <i class="ion-android-people"></i> POSTED BY EALINE FIGUEIREDO
                                </li>

                            </ul>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="images/blog/blog-post-1.jpg" alt="">
                        </div>
                        <div class="post-comments">
                            <h3 class="post-sub-heading">Os comentários estão temporáriamente desativados</h3>
                        </div>

<?php require_once __DIR__ . '/fim-html.php';
