<?php layoutInit() ?>

<?= startSection('styles') ?>
    <link rel="stylesheet" href="<?= assets('intl-phone/css/intlTelInput.css')?>">
<?= endSection('styles') ?>

<?= startSection('content') ?>

<div class="welcome-area container-fluid" id="welcome" style="margin-top:150px;">
<div id="formSignup">
    <h1 align="center">CALL</h1><br>
    <div class="row" style="justify-content: center;">
        <div class="col-lg-6 bg-transparent">
            <div class="contact-form glass">
                <!-- <form id="contactForm" method="post" action="call" role="form"> -->
                    <div class="form-group col-md-12">
                        <label class="form-label">Your number</label><br>
                        <input class="form-control" type="text" value="+12564747095" readonly name="userPhone" id="userPhone"
                            placeholder="(651) 555-7889">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Callable number</label><br>
                        <input class="form-control" type="text" name="salesPhone" id="salesPhone"
                                required >
                    </div>
                    <!-- <button type="submit" class="btn btn-default">
                        Call
                    </button> -->
                    <div class="row justify-content-center" >
                        <div class="form-group">                        
                            <button type="submit" id="calling" onclick="callFor()" class="main-button">Call</button>
                        </div>
                    </div> 
                <!-- </form> -->
                    <!-- <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Email</label>
                            <input id="email" class="form-control" type="email" name="email">
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="form-group col-md-6">                        
                            <button type="submit" onclick="submitSignup()" id="btnSignup" class="main-button">Let's go</button>
                        </div>
                        <div class="form-group col-md-6">
                            <a href="#" onclick="goTo('formLogin','formSignup')" class="btn btn-transparent text-dark">Login</a>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>

</div>
<?php endsection('content') ?>

<?php startSection('scripts') ?>
    <script src="<?= assets('js/app.js') ?>"></script>
    <script type="text/javascript" src="<?= assets('intl-phone/js/intlTelInput.min.js') ?>"></script>
    <script>
        function switchType()
        {
            if ($('#password').attr('type') == 'password')
            {
                $('#password').attr('type', 'text');
                $('#peye').attr('class', 'fa fa-eye');
                return;
            }

            if ($('#password').attr('type') == 'text')
            {
                $('#password').attr('type', 'password');
                $('#peye').attr('class', 'fa fa-eye-slash');
                return;
            }
        }

        function submitLogin()
        {

        }

        function submitSignup()
        {
            var firstname = $('#firstname').val()
            var lastname = $('#lastname').val()
            var location = $('#location').val()
            var age = $('#age').val()
            var gender = $('#gender').val()
            var email = $('#email').val()
            var password = $('#password').val()

            $('#btnSignup').html('Let\s go <i class="fa fa-spinner fa-spin"></i>');
            $.ajax({
                type: "post",
                url: "/saveUser",
                data: {firstname:firstname,lastname:lastname,location:location,age:age,gender:gender,email:email,password:password},
                success: function (msg)
                {
                    console.log(msg);
                    var val = msg.split("||");
                    if (val[0] == "true") {
                        setTimeout(() => {
                            toastr.success(val[1]);
                        }, 1000);
                        setTimeout(() => {
                            location.href = '/ads';
                        }, 2000);
                    } else if (val[0] == "false") {
                        toastr.error(val[1]);
                        $('#btnSignup').html('Let\s go');
                    }
                }
            });
        }

        function goTo(to,from)
        {
            $("#"+from).animate({
                opacity: 0
            }, 1000).prependTo();

            setTimeout(() => {
            $('#'+from).css('display', 'none');
            
            $("#"+to).animate({
                opacity: 0
            }, 1).prependTo();
            $('#'+to).removeAttr("style");
            $("#"+to).animate({
                opacity: 1
            }, 2000).prependTo();
            }, 1000);
        }

    </script>
<?php endSection('scripts') ?>

<?php setLayout('app/layout.php') ?>