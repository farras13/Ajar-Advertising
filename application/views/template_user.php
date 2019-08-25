<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ajar Advertising</title>
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Site Meta -->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- use fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous" />

        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap/bootstrap.min.css">

        <!-- local css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
        <script src="<?php echo base_url() ?>/assets/js/scrollify.js"></script>

        <script>

        </script>
    </head>

    <body>

        <!-- content -->

        <?php $this->load->view($main_view); ?>


        <!-- lib -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

        <!-- lib -->

        <!-- javascript -->
        <script>
            let title = document.querySelectorAll(".title")
            let box = document.querySelectorAll(".box")
            let label = document.querySelectorAll(".label")
            let bg = document.querySelectorAll(".nopadbackground")


            $(document).ready(function () {
                $(label).hide()
            })


            for (let i = 0; i < title.length; i++) {

                $(bg[i]).css("background-image",
                    "url(https://www.organicwebdesign.com.au/wp-content/uploads/2010/10/Digital-Agency.jpg)")

                $(box[i]).bind('mouseenter', function () {
                    $(title[i]).css({
                        'transform': 'translateY(-50%)',
                        'transition-timing-function': 'ease-in',
                        'transition': '1s'
                    })
                    $(label[i]).show().css({
                        'transform': 'translateY(-50%)',
                        'transition-timing-function': 'ease-in',
                        'transition': '1s'
                    })
                    $(this).stop().animate({
                        bottom: 0
                    }, 1350);
                }).bind('mouseleave', function () {
                    $(title[i]).css({
                        'transform': 'translateY(0%)',
                        'transition-timing-function': 'ease-in',
                        'transition': '1s'
                    })
                    $(label[i]).hide().css({
                        'transform': 'translateY(0%)',
                        'transition-timing-function': 'ease-in',
                        'transition': '1s'
                    })
                    $(this).stop().animate({
                        bottom: 0
                    }, 1350);
                });

            }


            $(".btn-play").on("click", function (e) {
                e.preventDefault();
                var $this = $(this);
                $this.closest(".c3").addClass("show-popup");
            });

            $(".popup").on("click", function (e) {
                e.preventDefault();
                e.stopPropagation();

                $(".c3").removeClass("show-popup");
            });

            $(".popup > iframe").on("click", function (e) {
                e.stopPropagation();
            });
        </script>
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