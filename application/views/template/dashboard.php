<div class="container">


    <!-- header section -->
    <div class="row m-0 p-0">
        <div class="col-md-8">
            <b>User report by distribution</b>
            <hr class="mt-2 bg-gray">
        </div>
        <div class="col-md-4">
            <div class="row mt-3 mb-5 p-0">
                <span class="mr-0 pt-2 pl-5 pr-4 fz-1 font-weight-bold">Period</span>
                <select class="form-control fz-1 w-60 " name="dropdown">
                    <option>Yesterday</option>
                    <option>Default selected</option>
                    <option>Default select</option>
                </select>
            </div>
        </div>
    </div>


    <!-- row dounut chart -->
    <div class="row">
        <div class="col-md-6 ">
            <div class="bg-white w-100 py-3 shadow-sm rounded row justify-content-center">
                <canvas id="user-chart-doughnut" class="w-25 h-25"></canvas>
                <div class="fz-1 align-items-center my-auto">
                    <b class="fz-2">All User</b>
                    <p class="text-gray m-0"> 100.00% Users</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="bg-white border-dashed w-100 py-3 rounded shadow-sm row justify-content-center">
                <canvas id="segment-chart-doughnut" class="w-25 h-25"></canvas>
                <div class="fz-1 align-items-center my-auto">
                    <b class="fz-2 "> <a href="" class="text-gray">+ Add Segment</a> </b>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-3">
            <span class="mr-0 pr-4 fz-1 font-weight-bold">Primary Dimension:</span>
            <select class="form-control mt-2 fz-1 w-100 " name="dropdown">
                <option>Top Chanels</option>
                <option>Default selected</option>
                <option>Default select</option>
            </select>
        </div>
        <div class="col-sm-3">
            <span class="mr-0 mb-2 pr-4 fz-1 font-weight-bold">Conversion</span>
            <select class="form-control mt-2 fz-1 w-100 " name="dropdown">
                <option>eCommerce</option>
                <option>Default selected</option>
                <option>Default select</option>
            </select>
        </div>
        <div class="col-sm-3 pt-4">
            <a class="font-weight-bold fz-1" href="">Edit Channel Grouping</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-5">
            <div class="bg-white w-100 p-4 pb-5 shadow-sm">
                <p class="pb-3 font-weight-bold">Top Channels</p>
                <canvas id="top-channel-pie"></canvas>
            </div>
        </div>
        <div class="col-md-7">
            <div class="bg-white w-100 p-4 shadow-sm">
                <p class="pb-3 font-weight-bold">Users</p>
                <canvas class="w-75 h-auto mx-auto" id="users-pie"></canvas>
            </div>
        </div>
    </div>

    <!-- User report by city -->
    <div>
        <!-- header section -->
        <div class="row mt-5 p-0">
            <div class="col-md-8">
                <b>User report by city</b>
                <hr class="mt-2 bg-gray">
            </div>
            <div class="col-md-4">
                <div class="row mt-3 mb-5 p-0">
                    <span class="mr-0 pt-2 pl-5 pr-4 fz-1 font-weight-bold">Period</span>
                    <select class="form-control fz-1 w-60 " name="dropdown">
                        <option>Yesterday</option>
                        <option>Default selected</option>
                        <option>Default select</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="row fz-1 bg-gray py-2 px-4">
            <b>Demographic: overview</b>
            <div class="row ml-auto mr-0 ">
                <ul class="nav">
                    <li class="nav-item p-0">
                        <select class="form-control fz-1 pr-5 w-100 " name="dropdown">
                            <option>Yesterday</option>
                            <option>Default selected</option>
                            <option>Default select</option>
                        </select>
                    </li>
                    <li class="nav-item align-self-center">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </li>
                    <li class="nav-item p-0">
                        <select class="form-control fz-1 w-100 " name="dropdown">
                            <option>Yesterday</option>
                            <option>Default selected</option>
                            <option>Default select</option>
                        </select>
                    </li>
                    <li class="nav-item  align-self-center">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </li>
                </ul>
            </div>
        </div>


        <table id="exampletable" class="display table fz-1 border-0 bg-white" width="100%"></table>

    </div>
    <!-- end User report by city -->

    <!-- header section -->
    <div class="row mt-5 p-0">
        <div class="col-md-8">
            <b>User demofraphic report</b>
            <hr class="mt-2 bg-gray">
        </div>
        <div class="col-md-4">
            <div class="row mt-3 mb-5 p-0">
                <span class="mr-0 pt-2 pl-5 pr-4 fz-1 font-weight-bold">Period</span>
                <select class="form-control fz-1 w-60 " name="dropdown">
                    <option>Yesterday</option>
                    <option>Default selected</option>
                    <option>Default select</option>
                </select>
            </div>
        </div>
    </div>
    <!-- end header -->

    <div class="row fz-1 bg-gray py-2 px-4">
        <b>Demographic: overview</b>
        <div class="d-flex ml-auto mr-0">
            <ul class="nav">
                <li class="nav-item">SAVE</li>
                <li class="nav-item">EXPORT</li>
                <li class="nav-item">SHARE</li>
                <li class="nav-item">INSHIGTS</li>
            </ul>
        </div>
    </div>

    <!-- row dounut chart -->
    <div class="row mt-3 p-0 mx-0">
        <div class="col-md-6 ">
            <div class="bg-white mr-0 w-100 py-3 shadow-sm rounded row justify-content-center">
                <canvas id="user-chart-doughnut2" class="w-25 h-25"></canvas>
                <div class="fz-1 align-items-center my-auto">
                    <b class="fz-2">All User</b>
                    <p class="text-gray m-0"> 100.00% Users</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="bg-white mr-0 w-100 py-3 border-dashed  rounded shadow-sm row justify-content-center">
                <canvas id="segment-chart-doughnut2" class="w-25 h-25"></canvas>
                <div class="fz-1 align-items-center my-auto">
                    <b class="fz-2 "> <a href="" class="text-gray">+ Add Segment</a> </b>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-5 p-0">
        <span class="mr-0 pt-2 pr-4 fz-1 font-weight-bold">Key Metric</span>
        <select class="form-control fz-1 w-25 " name="dropdown">
            <option>Users</option>
            <option>Default selected</option>
            <option>Default select</option>
        </select>
    </div>

    <div class="row bg-white">
        <div class="col-md-5 p-3">
            <b>Age</b>
            <canvas class="mt-4" id="age-bar"></canvas>
        </div>
        <div class="col-md-7 p-3">
            <b class="text-left">Gender</b>
            <span class="fz-1  float-right text-black-50">0,26% of total Users</span>
            <canvas class="w-75 h-auto" id="gender-pie"></canvas>
            <div class="text-right mt-4">
                <span class="fz-1 text-black-50">This report was generated on 3/15/20 at 01:00:22 PM</span>
                <a class="fz-1 ml-4" href="">Refersh Report</a>
            </div>

        </div>
    </div>




</div>


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
    gradient.addColorStop(0, '#05a4bd');
    gradient.addColorStop(1, '#ffffff');
    /***************/

    var userspiechart = new Chart(userspie, {
        type: 'line',
        data: {
            labels: ['Mar 13', 'Mar 14', 'Mar 15', 'Mar 16', 'Mar 17', 'Mar 18'],
            datasets: [{
                backgroundColor: gradient, // Put the gradient here as a fill color
                borderColor: "#05a4bd",
                pointBackgroundColor: "#ffffff",
                pointBorderWidth: 2,
                pointRadius: 8,
                pointBorderColor: "#05a4bd",
                data: [25, 20, 30, 15, 20, 45]
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