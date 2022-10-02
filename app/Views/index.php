<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="text/css" href="https://storage.googleapis.com/assets.pena.work/icon.png">
    <title><?= esc($title)?></title>
    <!-- Custom CSS -->
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</header>
<body>
<div class="container">
    <!-- Content here -->
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <img class="d-block mx-auto mb-4" src="<?= base_url('assets/img/icon.png')?>" alt="" width="80" height="80">
        <h1 class="display-4 fw-bold">BISNIS FOLLOWER</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Buruan tambah follower tiktok kamu dengan bergabung bersama pena. Dapatkan juga reward reward menarik !</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button type="button" class="btn btn-outline-secondary btn-lg px-4 me-sm-3"><img class="d-block" src="<?= base_url('assets/img/google-play.png')?>"></button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4"><img class="d-block" src="<?= base_url('assets/img/app-store.png')?>"></button>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="<?= base_url('assets/img/sample_1.png')?>" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="500" height="300" loading="lazy">
            </div>
        </div>
    </div>
</div>
<script rel="script" src="<?= base_url('/assets/js/bootstrap.bundle.min.js')?>" ></script>
<script rel="script" src="<?= base_url('/assets/js/popper.min.js')?>" ></script>
<script rel="script" src="<?= base_url('/assets/js/bootstrap.min.js')?>" ></script>
</body>
</html>