<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Aplikasi Klinik">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Aplikasi Data Klinik Cepat Tanggap</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Favicons -->

    <style>

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 62.5%;
            }
        }

    </style>

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/custom/login.css" rel="stylesheet">

</head>

<body class="text-center">
    <form class="form-signin shadow-lg" action="<?= base_url('auth/login_aksi'); ?>" method="post">
        <img class="mb-3" src="<?= base_url(); ?>assets/img/logo_rosma.png" alt="" width="155" height="155">
        <h2 class="mb-4 font-italic font-weight-bold">Silahkan Login</h1>
            <div class="alert alert-success">
                <?= validation_errors(); ?>
            </div>
            <label for="" class="sr-only"></label>
            <input type="mail" id="username" name="username" class="form-control" placeholder="Username">

            <label for="" class="sr-only"></label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">

            <button class="btn btn-lg btn-primary btn-block font-weight-bold" type="submit">Login</button>

            <p class="mt-5 mb-3 font-italic text-center text-monospace text-muted">&copy; 2023 Klinik Cepat Tanggap</p>
    </form>

</body>

</html>