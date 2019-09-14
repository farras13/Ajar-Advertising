<div data-include="header"><?php include 'include/header.php'; ?></div>

<div class="col-xl-12 p-0 m-0 w-100">
	<div class="row w-100 m-0">
		<div class="col-md-4 m-0 p-0 ">
			<div id="demo" class="carousel slide payment" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators ">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>

				<!-- The slideshow -->
				<div class="carousel-inner h-50">
					<div class="carousel-item active h-75">
						<p>
							Lorem Ipsum adalah contoh teks atau dummy dalam industri
							percetakan dan penataan huruf atau typesetting
						</p>
					</div>
					<div class="carousel-item  h-75">
						<p>
							Lorem Ipsum adalah contoh teks atau dummy dalam industri
							percetakan dan penataan huruf atau typesetting
						</p>
					</div>
					<div class="carousel-item h-75">
						<p>
							Lorem Ipsum adalah contoh teks atau dummy dalam industri
							percetakan dan penataan huruf atau typesetting
						</p>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
		<div class="col-md-8 pt-5 bg-white">
		<?php include 'include/payment_method/klikpay.php'; ?>
		</div>
	</div>
</div>

<div data-include="footer-2"><?php include 'include/footer.php'; ?></div>
