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
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">

        <!-- chart -->
        <script src="<?php echo base_url() ?>assets/js/chart.js"></script>
    </head>

    <body>

        <div data-include="header-db"> <?php include'include/header-db.php'; ?></div>

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
                    <div data-include="dashboard"><?php include 'include/dashboard.php' ?></div>
                </div>

                <!-- section following -->
                <div class="tab-pane fade " id="step-2" aria-labelledby="step2-tab" role="tabpanel">
                    <div data-include="boost-awarness"><?php include 'include/boost-awarness.php' ?></div>
                </div>

                <!-- section setting -->
                <div class="tab-pane fade" id="step-3" aria-labelledby="step3-tab" role="tabpanel">
                    <div data-include="lead-generation"><?php include 'include/lead-generation.php' ?></div>
                </div>

                <!-- section download -->
                <div class="tab-pane fade " id="step-4" aria-labelledby="step4-tab" role="tabpanel">
                    
                </div>
            </div>

        </div>

        <div data-include="footer-2"> <?php include'include/footer-2.php'; ?></div>


        <!-- lib -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
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
        
<!-- dataset table -->
<script>
    var dataSet = [
        ["Yogyakarta", 17.423, 90, 3.73],
        ["Yogyakarta", 17.423, 90, 3.73],
        ["Yogyakarta", 17.423, 90, 3.73],
        ["Yogyakarta", 17.423, 90, 3.73],


    ];

    $(document).ready(function () {
        $('#exampletable').DataTable({

            "dom": '<"top"i>rt<"bottom"flp><"clear">',
            "searching": false,
            data: dataSet,
            columns: [

                {
                    title: ""
                },
                {
                    title: ""
                },
                {
                    title: ""
                },
                {
                    title: ""
                }
            ]
        });
    });
</script>

<script>
    var user = document.getElementById('user-chart-doughnut').getContext('2d');
    var segment = document.getElementById('segment-chart-doughnut').getContext('2d')
    var channel = document.getElementById("top-channel-pie").getContext('2d')
    var userspie = document.getElementById('users-pie').getContext('2d')


    var user2 = document.getElementById('user-chart-doughnut2').getContext('2d');
    var segment2 = document.getElementById('segment-chart-doughnut2').getContext('2d')

    var age = document.getElementById('age-bar').getContext('2d')
    var gender = document.getElementById('gender-pie').getContext('2d')

    $(document).ready(function () {
        $('#example').DataTable();
    });

    var userchart = new Chart(user, {
        type: 'doughnut',
        data: {
            labels: ['User'],
            datasets: [{
                data: [45],
                backgroundColor: '#05a4bd',
                borderColor: '#05a4bd'
            }]
        },
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });


    var segmentchart = new Chart(segment, {
        type: 'doughnut',
        data: {
            labels: ['User'],
            datasets: [{
                data: [45],
                borderColor: '#dedfe1'
            }]
        },
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    var channelchart = new Chart(channel, {
        type: 'pie',
        data: {
            labels: ['Direct', "Organic Search", 'Social', 'Referal'],
            datasets: [{
                data: [59, 39, 10, 15],
                borderWidth: 0,
                backgroundColor: [
                    '#05a4bd', '#b6eded', '#35e69b', '#f7e686'
                ]
            }]
        },
        options: {
            legend: {
                position: "right",
                labels: {
                    boxWidth: 12
                }
            },

            tooltips: {
                enabled: false
            }
        }
    })

    /*** Gradient ***/
    var gradient = userspie.createLinearGradient(0, 0, 0, 300);
    var cData = JSON.parse(`<?php echo $chart_data; ?>`);
    gradient.addColorStop(0, '#05a4bd');
    gradient.addColorStop(1, '#ffffff');
    /***************/

    var userspiechart = new Chart(userspie, {
        type: 'line',
        data: {
            labels: cData.label,
            datasets: [{
                backgroundColor: gradient, // Put the gradient here as a fill color
                borderColor: "#05a4bd",
                pointBackgroundColor: "#ffffff",
                pointBorderWidth: 2,
                pointRadius: 8,
                pointBorderColor: "#05a4bd",
                data: cData.data
            }]
        },
        options: {
            legend: {
                display: false
            },
            elements: {
                line: {
                    tension: 0
                }
            },
            scales: {
                xAxes: [{
                    display: true
                }],
                yAxes: [{
                    gridLines: {
                        display: true
                    },
                    ticks: {
                        display: false
                    }
                }],
            },
            responsive: true,

        }
    })

    var userchart2 = new Chart(user2, {
        type: 'doughnut',
        data: {
            labels: ['User'],
            datasets: [{
                data: [45],
                backgroundColor: '#05a4bd',
                borderColor: '#05a4bd'
            }]
        },
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });


    var segmentchart2 = new Chart(segment2, {
        type: 'doughnut',
        data: {
            labels: ['User'],
            datasets: [{
                data: [45],
                borderColor: '#dedfe1'
            }]
        },
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    var agechart = new Chart(age, {
        type: 'bar',
        data: {
            labels: ['18-24', "25-34", "34-30", '41-50', '51-65', '65+'],
            datasets: [{
                data: [27, 38, 9, 5, 4, 2],
                borderColor: '#dedfe1',
                backgroundColor: "#05a4bd"
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: true
                    }
                }]
            }
        }
    });

    var genderchart = new Chart(gender, {
        type: 'pie',
        data: {
            labels: ['Male', "Female"],
            datasets: [{
                data: [59, 39],
                borderWidth: 0,
                backgroundColor: [
                    '#05a4bd', '#b6eded'
                ]
            }]
        },
        options: {
            legend: {
                position: "right",
                labels: {
                    boxWidth: 12
                }
            },

            tooltips: {
                enabled: false
            }
        }
    })
</script>


    </body>


</html>