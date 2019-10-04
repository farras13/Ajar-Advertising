<div class="container px-5 w-75">
	<div class="alert alert-primary mb-2">
		<b> Order ID</b> <small class="float-right">sample-store-15682671</small>
	</div>
	<div class="alert alert-primary text-center">
		Open <b>GO-JEK</b> app on your phone and scan QR code below
	</div>
	<div class="my-5 mx-auto">
		<div id="qrcode"></div>
	</div>
	<div class="alert alert-warning text-center">
		Please complete your payment before 08 September 15:23 WIB <br>
		<b>14m 29s </b>
	</div>
</div>


<script src="<?php echo base_url() ?>assets/js/qrcode.js"></script>
<script type="text/javascript">
	new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");

</script>
