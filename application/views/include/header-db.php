<!-- <div id="nav" class="mx-4  ">
    <header class=" py-2 px-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-info" href="<?php echo site_url() ?>/Dashboard"> <span class="fa fa-home px-2"></span> Home </a>
            </div>
            <div class="col-4 text-center">
                <a href="<?php echo site_url() ?>/Dashboard"><img class="logo-header" src="<?php echo base_url() ?>assets/img/logo-adv.svg" alt="logo"></a>
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
</div> -->

<nav id="nav" class="navbar navbar-expand-lg navbar-light blog-header py-3">
	<div class="mx-auto mt-2 navbar-brand ">
		<a class="py-4" href="<?php echo site_url() ?>/Home"><img class="logo-header"
				src="<?php echo base_url() ?>/assets/img/logo-adv.svg" alt="logo"></a>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse my-2 float-right w-auto" id="navbarSupportedContent">
		<div class="w-auto mr-0 ml-auto">
			<a class="text-blue text-decoration-none mr-4" href="<?php echo site_url() ?>/Contact">
				<i class="fa fa-phone" aria-hidden="true"></i>
				Contact Us
			</a>
			<a class="btn btn-grad-warning btn-rounded px-4 fz-1 mr-3" href="<?php echo site_url() ?>/Login">
				Start Now</a>
			<a class="text-blue border-left pl-3 text-decoration-none mr-4" href="<?php echo site_url() ?>/Contact">
				<i class="fa fa-globe" aria-hidden="true"></i>
			</a>
			<div class="dropdown">
				<button class="btn border btn-rounded pl-5 " type="button"
					data-toggle="dropdown"><?php echo $profil->name; ?><i class="px-4 fas fa-angle-down fz-1"></i>
					<i class=""> <img class="user-icon" src="<?php echo base_url() ?>assets/img/avatar.png" alt="user">
					</i>
				</button>
				<ul class="ml-5 p-4 dropdown-menu">
					<li><a href="#">Profile Setting</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="<?php echo site_url() ?>/Login/Out">Sign Out</a></li>
				</ul>
			</div>
		</div>
	</div>

</nav>
<div id="myHeader" class="nav-scroller py-1 mb-2 border-top blog-header border-2">
	<nav class="nav d-flex justify-content-center ">
		<a class="px-4 py-1 text-muted text-decoration-none" href="<?php echo site_url() ?>/paket">Paket
			Artikel</a>
		<a class="px-4 py-1 text-muted text-decoration-none" href="<?php echo site_url() ?>/paket">Paket
			Interview</a>
		<a class="px-4 py-1 text-muted text-decoration-none" href="<?php echo site_url() ?>/Home/Payment">Afiliasi</a>
		<a class="px-4  py-1 text-muted text-decoration-none" href="<?php echo site_url() ?>/Home/Privacy">Promo</a>
		<a class="px-4  py-1 text-muted text-decoration-none" href="<?php echo site_url() ?>/Home/Faq">Blog</a>
	</nav>
</div>

<script>
	window.onscroll = function () {
		myFunction()
	};

	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;

	function myFunction() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
			$(header).addClass("bg-white zindex-foward")

		} else {
			header.classList.remove("sticky");
			$(header).removeClass("bg-white")

		}
	}

</script>
