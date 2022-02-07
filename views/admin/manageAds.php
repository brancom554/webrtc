<?php layoutInit() ?>

<?php startSection('header') ?>
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    </head>
<?php endSection('header') ?>

<?php startSection('content') ?>
    <div class="container-fluid p-3">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-primary col-md-12">
            <li class="breadcrumb-item active text-light" aria-current="page">Dashboard</li>
            <li class="breadcrumb-item text-light"><a class="text-light " style="text-decoration:none;!important" href="/customer/manage-users">Ads / Manage</a></li>
        </ol>    
    </div>

    <div class="row">
        <div class="card" style="display:flex;margin:auto;width:98%;">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Ads list</h5><hr>
                <table class="table table-responsive-lg responsive-table" width="100%" id="liste" style="font-size:80%;">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Attachment</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php foreach ($data['ads'] as $key => $value) { ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?= $value->title; ?></td>
                                <td><?= $value->location; ?></td>
                                <td><?= $value->describe; ?></td>
                                <td><a href="<?= storage($value->file) ?>">File</a></td>
                                <td align="center">
                                    <a class="m-2 btn btn-primary btn-sm" href=""><i class="fa fa-edit"></i></button>
                                    <a class="m-2 btn btn-danger btn-sm" onclick="return confirm('Delete this ads ?');" href="/deleteAdd/<?= $value->ads_id ?>"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                    <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    
<?php endSection('content') ?>

<?php startSection('footer') ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#liste').DataTable({});
        });
    </script>
<?php endSection('footer') ?>
<?php setLayout('./admin/layout.php'); ?>