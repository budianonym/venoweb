		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax full-screen clearfix" style="background: #FFF url('https://images.pexels.com/photos/990818/pexels-photo-990818.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260') center center no-repeat; background-size: cover; max-height: 350px;">
			<div class="vertical-middle">
				<div class="container topmargin-sm">
					<div class="row">
                    <!-- <h2 align="center">Our Teams</h2> -->
						<div class="col-lg-12 col-md-12">
                        <!-- <h2 style="float: right;">kjsdhvkjsdjksdj</h2> -->
							<div class="slider-title">
								<!-- <div class="badge badge-pill badge-default">Web Development and Data Analysis</div> -->
								<h2 align="center" style="color: white;">{{ $judul }}</h2>


								<!-- <h3 class="text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">- We Create your own <span class="t-rotate">Awesome,Beautiful,Great</span> Website.</h3>
								<p>Also with big data analysis service</p>
								<a href="#" class="button button-rounded button-large nott ls0">Get Started</a>
								<a href="#" class="button button-rounded button-large button-light text-dark bg-white border nott ls0">Contact Us</a> -->
							</div>
						</div>
					</div>
				</div>

			</div>




		</section><!-- #slider end -->
        <!-- Content
		============================================= -->
		<section id="content">

<div class="content-wrap">



	<div class="container clearfix">

		<div class="col_two_fifth topmargin nobottommargin" style="min-height: 350px;">
			<canvas id="chart-doughnut"></canvas>
		</div>

		<div class="col_three_fifth nobottommargin col_last">

			<div class="heading-block">
				<h3>Powerful insights to help grow your business.</h3>
				<span>Reports let you easily track and analyze the future of your business</span>
			</div>

			<p>We support businesses in achieving fact-based decision-making by converting their historical and real-time, traditional and big data into actionable insights. Our services are tailored to make the raw data and the environment ready, as well as strengthen the business with advanced analytics capabilities.</p>

			<!-- <a href="#">Learn more &rarr;</a>
 -->
		</div>

		<div class="clear"></div><div class="line"></div>

		<div class="col_three_fifth">

			<div class="heading-block">
				<h3>Advanced business statistics.</h3>
				<span>Benchmarking your database performance helps you make great choices for your business.</span>
			</div>

			<p>We can analyze your website database to get statistic of your business performance. From the statistic, we can see some field that can be improved to develop your business</p>

			<p>Also we can suggest data beside your own database to develop potential field which can expand your business</p>

			<!-- <a href="#">Learn more &rarr;</a> -->

		</div>

		<div class="col_two_fifth topmargin col_last" style="min-height: 350px">
			<canvas id="chart-radar"></canvas>
		</div>

	</div>

	<!-- <a href="#" class="button button-full center tright topmargin footer-stick">
		<div class="container clearfix">
			Need help with your Account? <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>
		</div>
	</a> -->

</div>

</section><!-- #content end -->

	<!-- Charts JS
	============================================= -->
	<script src="{{ base_url('assets/js/chart.js') }}"></script>
	<script src="{{ base_url('assets/js/chart-utils.js') }}"></script>

	<script>

		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
						window.chartColors.blue,
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true,
				legend: {
					display: false,
					position: 'top',
				},
				title: {
					display: false,
					text: 'Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};


		// Radar Chart

		var color = Chart.helpers.color;
		var configRadar = {
			type: 'radar',
			data: {
				labels: [["T-Shirt", "V-Nect"], ["Hoodie", "Full Hoodie"], "Bracelet", ["Hat", "Black Hat"], "Shirt", "Ring", "Watch"],
				datasets: [{
					label: "My First dataset",
					backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
					borderColor: window.chartColors.red,
					pointBackgroundColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				}, {
					label: "My Second dataset",
					backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
					borderColor: window.chartColors.blue,
					pointBackgroundColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				},]
			},
			options: {
				legend: {
					display: false
				},
				title: {
					display: false
				},
				scale: {
				  ticks: {
					beginAtZero: true
				  }
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById("chart-doughnut").getContext("2d");
			window.myDoughnut = new Chart(ctx, config);
			window.myRadar = new Chart(document.getElementById("chart-radar"), configRadar);
		};

	</script>