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

