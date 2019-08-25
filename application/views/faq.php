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

    </head>

    <body>

        <div data-include="header"> <?php include 'template/header.php'; ?> </div>

        <div style="background-image:url('https://evoluer.in/wp-content/themes/assets/images/header-bg.jpg'); padding: 9% 7%;"
            class="w-100 bg-dark text-white">
            <div class="container-fluid py-5">
                <h1 class="font-weight-bolder">FAQ</h1>
                <h4 class="mr-5 mt-4">Eager to learn more about DAN or simply want to say hello? Get in touch and
                    we’ll be happy to answer all your questions.</h4>
            </div>
        </div>

        <div class="container-fluid text-center my-5 px-5">
            <img class="mb-4" src="<?php echo base_url() ?>assets/img/logo1.svg">
            <h2>How Can We Help You ?</h2>

            <div class="text-center">
                <div id="accordion" class="text-left my-5 w-75 mx-auto ">
                    <div class="card ">
                        <div class="card-header bg-transparent" id="headingThree">
                            <h5 class="mb-0 ml-4">
                                What is Ajar.id ?
                                <i class="fa fa-angle-down float-right"></i>
                            </h5>

                        </div>
                        <div id="collapseOne" class="collapse ac" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-transparent" id="headingThree">
                            <h5 class="mb-0 ml-4">
                                What is Ajar.id ?
                                <i class="fa fa-angle-down float-right"></i>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse ac" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-transparent" id="headingThree">
                            <h5 class="mb-0 ml-4">
                                What is Ajar.id ?
                                <i class="fa fa-angle-down float-right"></i>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse ac" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div data-include="footer-2">  <?php include 'template/footer.php'; ?> </div>


        <!-- lib -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
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