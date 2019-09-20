<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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

			<!-- methods index -->
			<div id="methods">
				<?php include 'include/payment-method.php'; ?>
			</div>

			<!-- cc method -->
			<div class="payment-methods" id="cc-method">
				<?php include 'include/payment_method/credit-card.php'; ?>
			</div>
			<div class="payment-methods" id="gopay-method">
				<?php include 'include/payment_method/gopay.php'; ?>
			</div>
			<div class="payment-methods" id="atm-method">
				<?php include 'include/payment_method/banking.php'; ?>
			</div>
			<div class="payment-methods" id="klikpay-method">
				<?php include 'include/payment_method/klikpay.php'; ?>
			</div>
			<div class="payment-methods" id="alfamart-method">
				<?php include 'include/payment_method/alfamart.php'; ?>
			</div>
			<!-- <div class="payment-methods" id="klikpay-method">
				<?php include 'include/payment_method/klikpay.php'; ?>
			</div> -->
			<div class="payment-methods" id="atm-instruction-method">
				<?php include 'include/payment_method/banking-instruction.php'; ?>
			</div>
		</div>
	</div>
</div>

<div data-include="footer-2"><?php include 'include/footer.php'; ?></div>

<script>
	$(document).ready(function () {
		$(".payment-methods").hide();
	});

	let methods = document.getElementById('methods');
	let cc_methods = document.getElementById('cc-methods-payment');
	// methods
	$(cc_methods).click(function () {
		$(methods).hide();
		$('#cc-method').show();
	});

	$("#gopay-methods-payment").click(function () {
		$(methods).hide();
		$('#gopay-method').show();
	});

	$("#atm-methods-payment").click(function () {
		$(methods).hide();
		$('#atm-method').show();
	});

	$("#klikpay-methods-payment").click(function () {
		$(methods).hide();
		$('#klikpay-method').show();
	});

	$("#alfamart-methods-payment").click(function () {
		$(methods).hide();
		$('#alfamart-method').show();
	});

	$("#bank-bca").click(function () {
		$(methods).hide();
		$('#atm-method').hide();
		$('#atm-instruction-method').show();
	});

</script>
