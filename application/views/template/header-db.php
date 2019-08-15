<div id="nav" class="mx-4  ">
    <header class=" py-2 px-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-info" href="<?php echo site_url() ?>/Dashboard"> <span class="fa fa-home px-2"></span> Home </a>
                <!-- <a class="text-info" href=""> <span class="fa fa-angle-left px-2"></span> Back </a> -->
            </div>
            <div class="col-4 text-center">
                <a href="index.html"><img class="logo-header" src="<?php echo base_url() ?>assets/img/logo-adv.svg" alt="logo"></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">

                <button class="btn text-gray"> <i class="fa fa-bell"> </li></i> </button>

                <div class="dropdown">
                    <button class="btn border btn-rounded pl-5 " type="button" data-toggle="dropdown"><?php echo $profil->name; ?><i
                            class="px-4 fas fa-angle-down fz-1"></i>
                        <i class=""> <img class="user-icon" src="<?php echo base_url() ?>assets/img/avatar.png" alt="user"> </i>
                    </button>
                    <ul class="ml-5 p-4 dropdown-menu">
                        <li><a href="#">Profile Setting</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="<?php echo site_url() ?>/Login/Out">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>