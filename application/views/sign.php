<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ajar Advertising</title>

        <!-- use fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous" />

        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/bootstrap.min.css">

        <!-- local css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

        <style>
            html,
            body {
                height: 100%;
                margin: 0;
            }

            .full-height {
                height: 100%;
            }
        </style>
    </head>

    <body>

       <?php if($this->session->flashdata('succes')){ ?>
            <div class="col-md-12" style="margin-top: -70px; z-index: 10000; padding: 0em 25% 0em 25%;">
                <div class="alert alert-danger fade in" id="alertAuto" style="border-radius: 30px; font-weight: bold;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo $this->session->flashdata('succes'); ?>
                </div>
            </div>
        <?php } ?>

        <div class="full-height d-flex">
            <div class="split left flex-column blur">
                <div class="centered w-50 px-5 text-left">
                    <h2 class="text-white">Reach more people with
                        <b> AJAR Ads </b> </h2>
                </div>
            </div>

            <div id="login" class="split right flex-column">
                <form  method="POST" action="<?php echo site_url() ?>/Login/Check">
                <div class="centered w-50">
                    <h3> <b> Hello Ajarian ! </b></h3>
                    <h4>Let’s start make a noise for your brand !</h4>
                    <div class="form-group account mt-5 ">
                        <input type="text" class="form-control w-100 my-4" id="username" name="username" placeholder="User name" required="">
                        <div class="pass_show">
                            <input type="password" class="form-control w-100 my-4" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn-grad-warning w-100 btn-rounded py-2">Sign In</button>

                    <p class="text-right my-3 fz-1"> <a href="">Forget my password</a> </p>
                    <p class="text-center fz-1">By pressing sign in button, I agreed to the applied <a href="">term and
                            condition</a> made by PT
                        AJAR Media
                        Digital</p>
                    <p class="text-center fz-1"> <a id="tosingup" href="#">Sign up</a> here if you are not
                        registered
                        yet.</p>
                </div> </form>
            </div>

            <div id="singup" class="split right flex-column">
                <div class="centered w-50">
                    <h3> <b> Hello Ajarian ! </b></h3>
                    <h4>Let’s start make a noise for your brand !</h4>
                    <form  method="POST" action="<?php echo site_url() ?>/Login/regis"  enctype="multipart/form-data">
                    <div class="form-group account mt-4 ">
                        <input type="text" class="form-control w-100 my-2" id="name" name="name" placeholder="Name" required="">
                        <input type="email" class="form-control w-100 my-2" name="email" id="email" placeholder="Email" required="">
                        <input type="text" class="form-control w-100 my-2" name="company" id="company" placeholder="Company Name" required="">
                        <input type="tel" class="form-control w-100 my-2" id="phone" name="phone" placeholder="Phone" maxlength="12">
                        <div class="pass_show">
                            <input type="password" class="form-control w-100 my-2" name="newpassword" id="newpassword"
                                placeholder="Password">
                        </div>
                        <div class="pass_show">
                            <input type="password" class="form-control w-100 my-2" id="confirmpassword"
                                placeholder="Confirm Password">
                        </div>
                        <small id="error-password" class="text-danger m-0">password not match</small>
                    </div>
                    <button id="btn-signup" type="submit" class="btn-grad-warning w-100 btn-rounded py-2">Sign Up</button></form>

                    <p class="text-right my-3 fz-1"> <a href=""  id="fgt">Forget my password</a> </p>
                    <p class="text-center fz-1">By pressing sign in button, I agreed to the applied <a href="">term and
                            condition</a> made by PT
                        AJAR Media
                        Digital</p>
                    <p class="text-center fz-1"> <a id="tologin" href="#">Sign In</a> here if you are not
                        registered
                        yet.</p>
                </div>
            </div>


        </div>


        <!-- lib -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"> </script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <!-- lib -->


        <!-- javascript -->
        <script type="text/javascript">
          $("#alertAuto").fadeTo(5000, 500).slideUp(500, function(){
          $("#alertAuto").slideUp(500);
        </script>
        <script>
            $(document).ready(function () {
                $('.pass_show').append('<span class="ptxt fa fa-eye"></span>');

                $('#singup').hide()
                $('#error-password').hide()
            });


            $(document).on('click', '.pass_show .ptxt', function () {
                $(this).prev().attr('type', function (index, attr) {
                    return attr == 'password' ? 'text' : 'password';
                });
            });


            $('#tosingup').click(function () {
                $('#login').hide()
                $('#fgt').hide()
                $('#singup').slideDown('slow', function () {
                    $(this).show()
                })
            })

            $('#tologin').click(function () {
                $('#singup').hide();
                $('#login').slideDown('slow', function () {
                    $(this).show()
                })
            })

            $('#confirmpassword').keyup(() => {
                if ($("#newpassword").val() != $("#confirmpassword").val()) {
                    $('#error-password').show()
                } else {
                    $('#error-password').hide()
                }
            })
        </script>

    </body>

</html>