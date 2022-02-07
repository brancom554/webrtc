<?php layoutInit() ?>
<?= startSection('styles') ?>
    <style>
        video {
            max-width: 100%;
        }

    </style>
<?= endSection('styles') ?>
<?php startSection('content') ?>

<div class="welcome-area container-fluid" id="welcome" style="margin-top:150px;">
    <h2 align="center">PLEASE WAIT <span id="timer"></span><i class="fa fa-spinner fa-spin"></i></h2><br><br>
    <div class="card-deck glass" id="card1" style="border-style:none!important;">
        <div class="card glass col-md-12">
            <div class="card-body">
                <h4 class="card-title"><?= $data['ads'][0]->title ?></h4>
                        <?php if(array_search('mp4',explode('.',$data['ads'][0]->file))) { ?>
                            <div class="d-flex justify-content-center"><video autoplay controls src="<?= storage($data['ads'][0]->file) ?>"></video></div>
                        <?php }elseif(array_search('jpg',explode('.',$data['ads'][0]->file)) || array_search('png',explode('.',$data['ads'][0]->file))){ ?>
                            <img src="<?= storage($data['ads'][0]->file) ?>" class="img-fluid">
                        <?php } ?>            
            </div>
        </div>
    </div>
    <div class="card-deck glass" id="card2" style="display:none;border-style:none!important;">
        <div class="card glass col-md-12">
            <div class="card-body">
                <h4 class="card-title"><?= $data['ads'][1]->title ?></h4>
                        <?php if(array_search('mp4',explode('.',$data['ads'][1]->file))) { ?>
                            <div class="d-flex justify-content-center"><video autoplay controls src="<?= storage($data['ads'][1]->file) ?>"></video></div>
                        <?php }elseif(array_search('jpg',explode('.',$data['ads'][1]->file)) || array_search('png',explode('.',$data['ads'][1]->file))){ ?>
                            <img src="<?= storage($data['ads'][1]->file) ?>" class="img-fluid">
                        <?php } ?>
            </div>
        </div>
    </div>
    <div class="card-deck glass" id="card3" style="display:none;border-style:none!important;">
        <div class="card glass col-md-12">
            <div class="card-body">
                <h4 class="card-title"><?= $data['ads'][2]->title ?></h4>
                        <?php if(array_search('mp4',explode('.',$data['ads'][2]->file))) { ?> 
                            <div class="d-flex justify-content-center"><video autoplay controls src="<?= storage($data['ads'][2]->file) ?>"></video></div>
                        <?php }elseif(array_search('jpg',explode('.',$data['ads'][2]->file)) || array_search('png',explode('.',$data['ads'][2]->file))){ ?>
                            <img src="<?= storage($data['ads'][2]->file) ?>" class="img-fluid">
                        <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php endsection('content') ?>

<?php startSection('scripts') ?>
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

            var timeLeft = 30;
            var elem = document.getElementById('timer');
            
            var timerId = setInterval(countdown, 1000);
            
            function countdown() {
                if (timeLeft == -1) {
                    clearTimeout(timerId);
                    location.href = "/call"
                } else {
                    if(timeLeft == 0)
                        elem.innerHTML = timeLeft + ' second remaining ';
                    else{
                        if(timeLeft == 20)
                        {                
                            $('#card1').css('display', 'none');
                            $('#card2').removeAttr("style");
                            $('#card2').css('border-style', 'none');
                        }
                        if(timeLeft == 10)
                        {                
                            $('#card2').css('display', 'none');
                            $('#card3').removeAttr("style");
                            $('#card3').css('border-style', 'none');
                        }
                        elem.innerHTML = timeLeft + ' seconds remaining ';
                    }
                    timeLeft--;
                }
            }
        
    </script>
<?php endSection('scripts') ?>

<?php setLayout('app/layout.php') ?>