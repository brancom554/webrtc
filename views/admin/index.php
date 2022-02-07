<?php layoutInit() ?>

<?php startSection('head') ?>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
<?php endSection('head') ?>

<?php startSection('content') ?>
    <div class="container-fluid p-3">


        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <ol class="breadcrumb bg-primary col-md-12">
                <li class="breadcrumb-item active text-light" aria-current="page">Dashboard</li>
            </ol>    
        </div>

   
    </div>

<?php endSection('content') ?>

<?php startSection('footer') ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<?php endSection('footer') ?>

<?php setLayout('./admin/layout.php'); ?>