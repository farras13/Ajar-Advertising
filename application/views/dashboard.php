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
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

        <!-- local css -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">

        <!-- chart -->
        <script src="js/chart.js"></script>
    </head>

    <body>

        <div data-include="header-db"></div>

        <div class="bg-light py-5">
            <div class="container">
                <div class="d-flex w-auto ">
                    <ul class="nav shadow bg-white rounded" role="tablist">
                        <li class="nav-item tab   active-tab border-right ">
                            <a href="#step-1" id="step1-tab" class="nav-link " aria-selected="false" data-toggle="tab"
                                role="tab">Dashboard</a>
                        </li>
                        <li class="nav-item tab   border-right ">
                            <a href="#step-2" id="step2-tab" class="nav-link " aria-selected="false" data-toggle="tab"
                                role="tab">Boost Awareness</a>
                        </li>
                        <li class="nav-item tab    ">
                            <a href="#step-3" id="step3-tab" class="nav-link active" aria-selected="true"
                                data-toggle="tab" role="tab">Lead generation</a>
                        </li>
                        <li class="nav-item tab   border-left ">
                            <a href="#step-4" id="step4-tab" class="nav-link " aria-selected="false" data-toggle="tab"
                                role="tab">Billing</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container mt-5 tab-content">
                <div class="tab-pane fade show active " id="step-1" aria-labelledby="step1-tab" role="tabpanel">
                    <div data-include="dashboard"></div>
                </div>

                <!-- section following -->
                <div class="tab-pane fade " id="step-2" aria-labelledby="step2-tab" role="tabpanel">
                    <div data-include="boost-awarness"></div>
                </div>

                <!-- section setting -->
                <div class="tab-pane fade" id="step-3" aria-labelledby="step3-tab" role="tabpanel">
                    <div data-include="lead-generation"></div>
                </div>

                <!-- section download -->
                <div class="tab-pane fade " id="step-4" aria-labelledby="step4-tab" role="tabpanel">

                </div>
            </div>

        </div>

        <div data-include="footer-2"></div>


        <!-- lib -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="loader.js"></script>
        <!-- lib -->


        <!-- javascript -->
        <script>
            let tab = document.querySelectorAll(".tab");
            let link = document.querySelectorAll("a[data-toggle='tab']");

            function changebg(x) {
                $(tab[x]).addClass("active-tab");
                for (let i = 0; i < tab.length; i++) {
                    if (i != x) {
                        $(tab[i]).removeClass("active-tab");
                    }
                }
            }

            $(document).ready(function () {
                for (let i = 0; i < tab.length; i++) {
                    $(tab[i]).click(function () {
                        changebg(i);
                    });
                }
            });
        </script>


    </body>


</html>