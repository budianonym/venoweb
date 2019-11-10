
		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax full-screen clearfix" style="background: #FFF url('https://images.pexels.com/photos/443383/pexels-photo-443383.jpeg') center center no-repeat; background-size: cover; max-height: 350px;">
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

			<div class="video-wrap h-100 d-block d-lg-none">
				<div class="video-overlay" style="background: rgba(255,255,255,0.85);"></div>
			</div>


		</section><!-- #slider end -->
        <!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="clear"></div>

					<form method="post" action="#here">
  <div class="form-group">
    <div class="senter"><label for="exampleInputEmail1" id="here">Domain Search</label></div>
    <div class="senter" ><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Domain" name="domain" autocomplete="off" style="width: 300px;"></div>
    <div class="senter"><small id="emailHelp" class="form-text text-muted">Please include tld extention. example: venoweb.com etc.</small></div>
  </div>
  <div class="senter"><button type="submit" class="btn btn-primary" id='aa'>Submit</button></div>
</form>

					<div class="clear"></div>
					@php
					if (isset($_POST['domain'])){
						echo $doma;
					};
					@endphp
				</div>

			</div>

		</section><!-- #content end -->

