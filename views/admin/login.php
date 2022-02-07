<?=  layoutInit(); ?>

<?php startSection('header') ?>
    <style>
        .bg-login-image {
            background: url(<?= assets("assets/images/left-image.png") ?>);
            background-position: center;
            background-size: cover;
        }
        .glass {
            background-color: rgba(255, 255, 255, .15);
            backdrop-filter: blur(5px);
        }
    </style>
<?php endSection('header') ?>

<?php startSection('content') ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome back !</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="login"
                                                aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                placeholder="Password">
                                        </div>
                                        <a href="#" onclick="submitLoginAjax();" id="btnLog"
                                            class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endSection('content') ?>

<?php endSection('footer') ?>
    <script>
        function submitLoginAjax()
        {
            var login = $('#login').val();
            var password = $('#password').val();
            if(login != '' && password != '')
            {
                $('#btnLog').html('Please wait <i class="fa fa-spinner fa-spin"></i>');
                $.ajax({
                    type: "post",
                    url: "/submitLoginAjax",
                    data: {login:login,password:password},
                    success: function (msg) {
                        console.log(msg);
                        var val = msg.split("||");
                        if (val[0] == "true") {
                            setTimeout(() => {
                                toastr.success(val[1]);
                            }, 1000);
                            setTimeout(() => {
                                location.href = '/adminHome';
                            }, 2000);
                        } else if (val[0] == "false") {
                            toastr.error(val[1]);
                            $('#btnLog').html('Login');
                        }
                    }
                });
            }else{
                toastr.error('All fields are required');
            }
        }    
    </script>
<?php endSection('footer') ?>
<?php setLayout('./admin/connexionLayout.php') ?>