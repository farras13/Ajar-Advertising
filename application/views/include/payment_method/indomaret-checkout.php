<div class="p-5">
	<div class="pb-3">
		<sup class="text-primary pl-3 fz-2">amount</sup>
		<h1 class="text-primary font-weight-bold float-right"> <sup>Rp</sup> 20,000 </h1>
	</div>
	<hr class="mb-0">
	<li class="list-group-item bg-light"><b> Order ID</b> <small class="float-right">sample-store-15682671</small>
	</li>
	<br>
	<div class="alert alert-info px-lg-5 fz-2">
		Please complete your payment at an Alfamart, Alfamidi, or Dan+Dan outlet before :
		<b> 09 September 15:18 WIB </b>
	</div>

	<svg id="barcode"></svg>

	<li class="list-group-item border-0 fz-2"> <b ">Payment Code</b> <span class=" float-right"> 9999123941348351
			</span>
	</li>


	<hr>
	<div class="col-md-12 w-100 text-right mt-4">
		<button class=" btn btn-abbys px-5 py-2 font-weight-bold">
			COMPLETE PAYMENT AT ALFAMART
		</button>
	</div>
</div>


<script src="<?php echo base_url() ?>assets/js/barcode.js"></script>
<script>
	JsBarcode("#barcode", "https://lindell.me/JsBarcode/", {
		textAlign: "center",
		height: 100,
		displayValue: false
	});

</script>
