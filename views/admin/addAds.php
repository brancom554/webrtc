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
            <li class="breadcrumb-item active text-light" aria-current="page">Dashboard ( Ads / Add )</li>
        </ol>    
    </div>

    <div class="row">
        <div class="card col-md-7 p-2" style="display:flex;margin:auto;width:98%;">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Add an ads</h5><hr>
                <div class="p-3">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title<span class="text-danger">&nbsp;*</span></label>
                            <input id="title" class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="location">Location<span class="text-danger">&nbsp;*</span></label>
                            <input id="location" class="form-control" type="text" name="location">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="file">File<span class="text-danger">&nbsp;*</span></label>
                            <input id="file" class="form-control" type="file" name="file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="describe">Description<span class="text-danger">&nbsp;*</span></label>
                            <textarea id="describe" class="form-control" name="describe"></textarea>
                        </div>
                    </div><br>
                    <button class="btn btn-primary" id="btnSave" onclick="saveAds()">Save</button>
                            </div>
            </div>
        </div>
    </div>

    </div>

<?php endSection('content') ?>

<?php startSection('footer') ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script>
        function saveAds()
        {
            var title = $('#title').val()
            var location = $('#location').val()
            var describe = $('#describe').val()
            if(title != '' && location != '' && describe != '')
            {
                $('#btnSave').html('Saving <i class="fa fa-spinner fa-spin"></i>');
                var form = new FormData()
                form.append('title',title)
                form.append('location',location)
                form.append('describe',describe)
                form.append('file',$('#file')[0].files[0])
                $.ajax({
                    type: "post",
                    url: "/saveAds",
                    data: form,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (msg)
                    {
                        var val = msg.split("||");
                        if (val[0] == "true") {
                            setTimeout(() => {
                                toastr.success(val[1]);
                            }, 1000);
                            setTimeout(() => {
                                window.location.reload();
                            }, 2000);
                        } else if (val[0] == "false") {
                            toastr.error(val[1]);
                            $('#btnSave').html('Save');
                        } 
                    }
                });
            }else{
                toastr.error('All fields are required')
            }
            
        }
    </script>
<?php endSection('footer') ?>

<?php setLayout('./admin/layout.php'); ?>