<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WebRTC</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?= assets('admin/css/sb-admin-2.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= assets('toastr/toastr.min.css') ?>">
    <script src="https://kit.fontawesome.com/637d7774d7.js" crossorigin="anonymous"></script>
    <?= section('header') ?>
</head>

<body class="bg-gradient-primary">
    <?= section('content') ?>
    <script src="<?= assets('admin/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= assets('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= assets('admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= assets('admin/js/sb-admin-2.min.js') ?>"></script>
    <script src="<?= assets('/toastr/toastr.min.js') ?>"></script>
    <?= section('footer') ?>

</body>

</html>