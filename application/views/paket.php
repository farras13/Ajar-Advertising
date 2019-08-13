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
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap/bootstrap.min.css">

        <!-- local css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">

    </head>

    <body>

        <div data-include="header"> <?php $this->load->view('template/header'); ?> </div>

        <div style="background-image:url('https://evoluer.in/wp-content/themes/assets/images/header-bg.jpg'); padding:11% 7%;"
            class="w-100  bg-dark text-white">
            <div class="container-fluid py-5">
                <h1 class="font-weight-bolder">PAKET A</h1>
                <h4 class="mr-5 mt-4">Eager to learn more about DAN or simply want to say hello? Get in touch and
                    we’ll be happy to answer all your questions.</h4>
            </div>
        </div>


        <div class="container my-5 py-5 text">

            <p>Digital Agency Network is an indispensable resource for brands, agencies and global community of
                marketers. Our website attracts over 120.000 visitors every month looking for the top digital
                marketing
                agencies, best practice advice, tips, tricks and insight into how to do business better online.

            </p>
            <p>
                We can help to raise awareness and drive leads from a relevant and engaged audience.
            </p>

            <h3 class="font-weight-bolder mt-5"> For Agencies
            </h3>
            <p>
                We attract business opportunities and offer our member agencies tools to showcase their agency
                to
                the market. Along with the benefits of membership, DAN member agencies may expand their reach
                through
                native advertising and content marketing on our website.
            </p>
            <p>
                Our advertising opportunities drive high quality leads from a large and loyal audience of agency
                executives and global community of marketers. We offer branded content opportunities to
                suppliers,
                vendors and event organisers to help them achieve their goals by lead generation and brand
                awareness
            </p>
            <p>
                For more information and to talk through your requirements, please contact us.
            </p>

            <div class="container p-0 mt-5 border">
                <div class="row m-0 w-100">
                    <div class="col-md-4 info pl-4 pt-4 pb-3">
                        <h3><strong>Paket A</strong> </h3>
                        <h5>IDR 1.000.000<strong>/package</strong></h5>
                    </div>
                    <div class="col-md-6 check mt-auto  mb-auto pt-2">
                        <div class="row">
                            <div class="col-sm-6 px-0">
                                <p> <span class="fa fa-check"></span>Lorem Ipsum Dolor Sit Amet </p>
                                <p> <span class="fa fa-check"></span>Lorem Ipsum Dolor Sit Amet </p>
                                <p> <span class="fa fa-check"></span>Lorem Ipsum Dolor Sit Amet </p>
                                <p> <span class="fa fa-check"></span>Lorem Ipsum Dolor Sit Amet </p>
                            </div>
                            <div class="col-sm-6 px-0">
                                <p> <span class="fa fa-check"></span>Lorem Ipsum Dolor Sit Amet </p>
                                <p> <span class="fa fa-check"></span>Lorem Ipsum Dolor Sit Amet </p>
                                <p> <span class="fa fa-check"></span>Lorem Ipsum Dolor Sit Amet </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center bg-primary text-white">
                        <div class="my-2">
                            <p style="font-size: 0.8em;" class="m-0">Price Starts From</p>
                            <h5 class="font-weight-bold mb-2 m-0">IDR 1.000.000</h5>
                            <button class="btn btn-outline-light px-4">BUY</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div data-include="footer-2"> <?php $this->load->view('template/footer'); ?> </div>


        <!-- lib -->
        <script src="<?php echo base_url() ?>/assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
        <!-- lib -->


        <!-- javascript -->
        <script>
            let cardheader = document.querySelectorAll(".card-header");
            let collapse = document.querySelectorAll(".ac")
            let angle = document.querySelectorAll(".float-right")
            for (let i = 0; i < cardheader.length; i++) {
                $(cardheader[i]).click(function () {
                    $(collapse[i]).toggle("slow")
                    $(angle[i]).toggleClass("fa-angle-up")

                })
            }
        </script>

    </body>


</html>