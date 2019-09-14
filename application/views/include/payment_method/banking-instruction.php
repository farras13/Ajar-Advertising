<div class="container px-5">
	<div class="text-center">
		<h3>LET’S FINISH POWERING YOU UP !</h3>
		<p>This Package is Right for You</p>
	</div>

	<hr />
	<div class="container">
		<p>How to Pay?
			<span class="float-right"> <img height="auto" width="50"
					src="https://upload.wikimedia.org/wikipedia/id/thumb/e/e0/BCA_logo.svg/472px-BCA_logo.svg.png"
					alt="atm" /> </span>
		</p>
		<hr>
		<div class="container">
			<?php $this->load->view('ajar_article/_messages'); ?>
			<div class="d-flex w-auto justify-content-center">
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
						<a href="#step-3" id="step3-tab" class="nav-link active" aria-selected="true" data-toggle="tab"
							role="tab">Lead generation</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="container mt-5 tab-content">
			<div class="tab-pane fade show active " id="step-1" aria-labelledby="step1-tab" role="tabpanel">
				<div data-include="dashboard"> Je</div>
			</div>

			<!-- section following -->
			<div class="tab-pane fade " id="step-2" aria-labelledby="step2-tab" role="tabpanel">
				<div data-include="boost-awarness">Aj</div>
			</div>

			<!-- section setting -->
			<div class="tab-pane fade" id="step-3" aria-labelledby="step3-tab" role="tabpanel">
				<div data-include="lead-generation">Xe</div>
			</div>

			<!-- section download -->

		</div>
	</div>
</div>
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
