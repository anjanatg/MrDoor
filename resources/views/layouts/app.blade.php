<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <title>@yield('title', 'Bootstrap 5 Template by Untree.co')</title>

  @stack('styles')
</head>

<body>

  <!-- Start Header/Navigation -->
<div class="bg-warning py-1">
    <div class="container-fluid d-flex justify-content-between align-items-center text-dark">

        <!-- Left -->
        <div class="ps-3">
            <i class="fa-solid fa-phone"></i> +91-9947400500
            &nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-envelope"></i> sales@mrdoor.in
        </div>

        <!-- Right -->
        <div class="fw-bold pe-2">
            <i class="fa-solid fa-location-dot"></i>&nbsp; Pala
        </div>

    </div>
</div>  
<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.webp') }}" width="190"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">HOME</a></li>
            <li><a class="nav-link" href="#">TYPES OF DOOR</a></li>
            <li><a class="nav-link" href="#">PRODUCTS</a></li>
            <li><a class="nav-link" href="#">COMPANY PROFILE</a></li>
            <li><a class="nav-link" href="#">GALLERY</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MORE
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Testimonials</a></li>
                    <li><a class="dropdown-item" href="#">Contact Us</a></li>
                </ul>
            </li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
          <li><a class="nav-link" href="#"><img src="{{ asset('assets/images/user.svg') }}">&nbsp;Log In</a></li>
          <li><a class="nav-link" href="#">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Header/Navigation -->

  <main class="pb-4">
    @yield('content')
  </main>

  <!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="assets/images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"></span><span>Contact Us</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
                                <div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your contact no.">
								</div>
                                <div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your message">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><h4>Our Office Address</h4></div>
                        <p class="mb-4"> R V Centre, Near Kottaramattom Bus Stand, Vaikom Road, Palai, Kottayam, Kerala, 686575</p><br>
                        <h4>General Enquiries</h4>
						<p class="mb-4">sale@mrdoor.in<br>mrdoorpala@gmail.com</p><br>
                        <h4>Call Us</h4>
                        <p class="mb-4">Customer Care 24x7<br>+91 9947 400 500</p>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li>PALA</li>
									<li>RAMAPURAM</li>
									<li>KOTTAYAM</li>
									<li>THODUPUZHA</li>
                                    <li>KATTAPANA</li>
                                    <li>RAJAKUMARI</li>
                                    <li>OCHIRA</li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li>9947 237 237</li>
									<li>9947 237 237</li>
                                    <li>9947 400 500</li>
                                    <li>9947 519 519</li>
                                    <li>9947 400 500</li>
                                    <li>9947 400 500</li>
                                    <li>9947 914 914 </li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li>VECHOOCHIRA</li>
                                    <li>MANIMALA</li>
                                    <li>KALADI</li>
                                    <li>TRISSUR</li>
                                    <li>KANNUR</li>
                                    <li>KASARAGOD</li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li>9947 237 37</li>
                                    <li>9947 237 37</li>
                                    <li>9947 592 592</li>
                                    <li>9947 592 592</li>
                                    <li>9947 408 408</li>
                                    <li>9947 408 408</li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->

  <!-- Footer add cheyyanam enkil ivide -->
  {{-- @include('partials.footer') --}}

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  @stack('scripts')
</body>
</html>