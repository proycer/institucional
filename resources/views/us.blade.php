@extends('partials.layout')

@section('content')
<div class="site-wrap" id="home-section">
    @include('partials.header')
    <div class="feature-big">
		<div class="container">
			<div class="row site-section">
				<div class="col-lg-7 pl-lg-5 ml-auto mt-md-5">
					<h2 class="text-black">Informaci&oacute;n centralizada</h2>
					<div class="author-box" data-aos="fade-right">
						<div class="d-flex mb-4">
							<div class="mr-3">
								<img src="images/25795363.png" alt="Image" class="img-fluid rounded-circle">
							</div>
							<div class="mr-auto text-black">
								<strong class="font-weight-bold mb-0">John Astete</strong> <br>
								Co-Founder, Proycer
							</div>
						</div>
						<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus vitae
							ipsa asperiores inventore aperiam iure?&rdquo;</blockquote>
					</div>
                </div>
                <div class="col-lg-1"></div>
            </div>

            <div class="row mb-5 site-section ">
                <div class="col-lg-1"></div>
				<div class="col-lg-7 pr-lg-5 mr-auto order-2 order-lg-1">
					<h2 class="text-black">Communicate and gather feedback</h2>
					<div class="author-box" data-aos="fade-right">
						<div class="d-flex mb-4">
							<div class="mr-3">
								<img src="images/25795363.png" alt="Image" class="img-fluid rounded-circle">
							</div>
							<div class="mr-auto text-black">
								<strong class="font-weight-bold mb-0">John Astete</strong> <br>
								Co-Founder, Proycer
							</div>
						</div>
						<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus vitae
							ipsa asperiores inventore aperiam iure?&rdquo;</blockquote>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection

