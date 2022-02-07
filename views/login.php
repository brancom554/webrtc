<?php layoutInit() ?>
<?php startSection('content') ?>

<div class="welcome-area container-fluid" id="welcome" style="margin-top:150px;">

<div id="formLogin" style="display:none;">
    <h1 align="center">LOGIN</h1><br>
    <div class="row" style="justify-content: center;">
        <div class="col-lg-6 bg-transparent">
            <div class="contact-form glass">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Email</label>
                            <input id="emailLogin" class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Password</label>
                            <div class="input-group">
                                <input type="password" class="tisa-bold p-2 form-control form-control-user"
                                    id="passwordLogin">
                                <div class="input-group-append">
                                    <button onclick="switchTypeLogin();" class="input-group-text"><i
                                            id="pleye" class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">                        
                            <button type="submit" onclick="submitLogin()" id="form-submit" class="main-button">Let's go</button>
                        </div>
                        <div class="form-group col-md-6">
                            <a href="#" onclick="goTo('formSignup','formLogin')" class="btn btn-transparent text-dark">Signup</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<div id="formSignup" >
    <h1 align="center">SIGNUP</h1><br>
    <div class="row bg-white" style="justify-content: center;">
        <div class="col-lg-6 bg-transparent">
            <div class="contact-form glass">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Firstname</label>
                            <input id="firstname" class="form-control" type="text" name="firstname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Lastname</label>
                            <input id="lastname" class="form-control" type="text" name="lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Location</label>
                            <input id="location" class="form-control" type="text" name="location">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Age</label>
                            <input id="age" class="form-control" type="number" name="age">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Gender</label>
                            <select id="gender" class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Email</label>
                            <input id="email" class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="">Password</label>
                            <div class="input-group">
                                <input type="password" class="tisa-bold p-2 form-control form-control-user"
                                    id="password">
                                <div class="input-group-append">
                                    <button onclick="switchType();" class="input-group-text"><i
                                            id="peye" class="fa fa-eye-slash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">                        
                            <button type="submit" onclick="submitSignup()" id="btnSignup" class="main-button">Let's go</button>
                        </div>
                        <div class="form-group col-md-6">
                            <a href="#" onclick="goTo('formLogin','formSignup')" class="btn btn-transparent text-dark">Login</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

</div>

<button type="button" id="modalInfos" hidden class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About WebRTC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align:justify">
          WebRTC (Web Real Time Communication or real-time communication) is a 
          communication protocol that allows a telephone communication to pass through a web browser.
           This type of protocol allows telephony to pass directly through the Internet network.<br><br>
           Contact us on <span class="text-primary">+311515151754</span> for more informations.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

        
        function switchTypeLogin()
        {
            if ($('#passwordLogin').attr('type') == 'password')
            {
                $('#passwordLogin').attr('type', 'text');
                $('#pleye').attr('class', 'fa fa-eye');
                return;
            }

            if ($('#passwordLogin').attr('type') == 'text')
            {
                $('#passwordLogin').attr('type', 'password');
                $('#pleye').attr('class', 'fa fa-eye-slash');
                return;
            }
        }

        function submitLogin()
        {
            var login = $('#emailLogin').val();
            var password = $('#passwordLogin').val();
            if(login != '' && password != '')
            {
                $('#btnLogin').html('Let\'s go <i class="fa fa-spinner fa-spin"></i>');
                $.ajax({
                    type: "post",
                    url: "/login",
                    data: {login:login,password:password},
                    success: function (msg) {
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
                            $('#btnLogin').html('Let\'s go');
                        }
                    }
                });
            }else{
                toastr.error('All field are required');
            }
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

            $('#btnSignup').html('Let\'s go <i class="fa fa-spinner fa-spin"></i>');
            $.ajax({
                type: "post",
                url: "/saveUser",
                data: {firstname:firstname,lastname:lastname,location:location,age:age,gender:gender,email:email,password:password},
                success: function (msg)
                {
                    window.location.href = '/ads';
                    // console.log(msg);
                    // var val = msg.split("||");
                    // if (val[0] == "true")
                    // {
                    //     // setTimeout(() => {
                    //     //     toastr.success(val[1]);
                    //     // }, 1000);
                    //     // setTimeout(() => {
                    //         window.location.href = '/ads';
                    //     // }, 2000);
                    // } else if (val[0] == "false") {
                    //     toastr.error(val[1]);
                    //     $('#btnSignup').html('Let\s go');
                    // }
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
        $(function () {
            $('#modalInfos').click()
        });
    </script>
<?php endSection('scripts') ?>

<?php setLayout('app/layout.php') ?>