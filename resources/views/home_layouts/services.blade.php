@extends('welcome_home_layout')
@section('content')
@foreach($serviceimage as $serviceimage)
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{$serviceimage->image}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-0 bread">Services</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-round-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

 
@endforeach
    <section class="services-section ftco-section">
      <div class="container">

      	<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Services Menu</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

		///use this one 
		<div class="container mt-5 mb-5">
			<div class="row g-2">
				<div class="col-md-6">
					<div class="card bg-white p-3 px-4 d-flex justify-content-center">
						<h5 class="mb-0">House Keeping</h5> <span class="price">$4/Hour</span>
						<div class="mt-4">
							<div class="d-flex justify-content-between align-items-center"> <span>All features</span> <span>1 Minute trigger</span> </div>
							<div class="d-flex justify-content-between align-items-center"> <span>5000 interactions</span> <span>Remove branding</span> </div>
							<div class="d-flex justify-content-between align-items-center"> <span>15 bots</span> <span>Priority support</span> </div>
						</div>
						<div class="mt-4"> <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModal">Buy Service</button> </div>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
								<div class="modal-content ">
									<div class="container ftco-relative ">
										<div class="row justify-content-center pb-3">
										<div class="col-md-10 heading-section text-center ftco-animate">
											
											<h2 class="mb-4">Booking Service</h2>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
										</div>
										</div>
										<h3 class="vr">Call Us: 012-3456-7890</h3>
											<div class="row justify-content-center">
												<div class="col-md-10 ftco-animate">
													<form class="appointment-form" method="post" action="#">
													
												<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<input type="text" class="form-control" name="location" id="location" placeholder="Location">
														</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<input type="text" class="form-control" name="telegram" id="telegram" placeholder="Telegram Phone">
														</div>
												</div>
												
												<div class="col-sm-12">
													<div class="form-group">
														<div class="select-wrap">
													<div class="icon"><span class="ion-ios-arrow-down"></span></div>
													<select name="service_id" id="service_id" class="form-control">
													
														<option value=""></option>
													
													</select>
													</div>
														</div>
												</div>
												</div>
												<div class="form-group">
												<input type="submit" value="Booking Now" class="btn btn-primary">
												</div>
											</form>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-6">
					<div class="card bg-white p-3 px-4 d-flex justify-content-center">
						<h5 class="mb-0">Team Cleaning</h5> <span class="price">$8+</span>
						<div class="mt-4">
							<div class="d-flex justify-content-between align-items-center"> <span>All features</span> <span>1 Minute trigger</span> </div>
							<div class="d-flex justify-content-between align-items-center"> <span>5000 interactions</span> <span>Remove branding</span> </div>
							<div class="d-flex justify-content-between align-items-center"> <span>15 bots</span> <span>Priority support</span> </div>
						</div>
						<div class="mt-4"> <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModal">Buy Service</button> </div>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="col-12">


										<div class="row justify-content-center pb-3">
											<div class="col-md-10 heading-section text-center ftco-animate">
												<span class="subheading">Booking</span>
												<h2 class="mb-4">Make an Appointment</h2>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
											</div>
										</div>


										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" id="appointment_name" placeholder="Name">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" id="appointment_email" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control appointment_date" placeholder="Date">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control appointment_time" placeholder="Time">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<div class="select-wrap">
														<div class="icon"><span class="ion-ios-arrow-down"></span></div>
														<select name="" id="" class="form-control">
															<option value="">Professional Makeup</option>
															<option value="">Manicure Pedicure</option>
															<option value="">Body Treatment</option>
															<option value="">Haircut &amp; Coloring</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" id="phone" placeholder="Phone">
												</div>
											</div>

										</div>
										<div class="form-group">
											<input type="submit" value="Make an Appointment" class="btn btn-primary">
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		/////end 

          <div class="row row-cols-1 row-cols-md-3">
              @foreach($service as $service)
                  <div class="col mb-4">
                      <div class="card h-100">
                          <img src="{{$service->image}}" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h2 class="card-title">{{$service->name}}</h2>
                              <h5 class="card-title">${{$service->price}}</h5>
                              <p class="card-text">{{$service->title}}</p>
                          </div>

                      </div>
                  </div>
              @endforeach
          </div>
      </div>
    </section>

    <section class="ftco-section ftco-booking bg-light">
    	<div class="container ftco-relative">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Booking</span>
            <h2 class="mb-4">Make an Appointment</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <h3 class="vr">Call Us: 012-3456-7890</h3>
    		<div class="row justify-content-center">
    			<div class="col-md-10 ftco-animate">
    				<form class="appointment-form" method="post" action="{{ route('booking.store')}}">
                        @csrf
	            <div class="row">
	              <div class="col-sm-6">
	                <div class="form-group">
			              <input type="text" class="form-control" name="location" id="location" placeholder="Location">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
			              <input type="text" class="form-control" name="telegram" id="telegram" placeholder="Telegram Phone">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                  <input type="date" class="form-control" name="date" placeholder="Date">
	                </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                  <input type="time" class="form-control" name="time" placeholder="Time">
	                </div>
	              </div>
	              <div class="col-sm-12">
	                <div class="form-group">
			              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="service_id" id="service_id" class="form-control">
                          @foreach($service_booling as $service_booling)
                      	<option value="{{$service_booling->id}}">{{$service_booling->name}}</option>
                          @endforeach
                      </select>
                    </div>
			            </div>
	              </div>
		          </div>
		          <div class="form-group">
	              <input type="submit" value="Booking Now" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Become</span>
            <h2 class="mb-4">Become Cleaner</h2>
            <p>Be Comea our Cleaner you will get a lot of Benefits from us like </p>
          </div>
        </div>
        <div class="row">
            @foreach($becom_cleaner as $becom_cleaner)
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">{{$becom_cleaner->name}}</h3>
	        			<p><span class="price">${{$becom_cleaner->price}}</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				        <li>{{$becom_cleaner->title1}}</li>
								<li>{{$becom_cleaner->title2}}</li>
								<li>{{$becom_cleaner->title3}}</li>
								<li>{{$becom_cleaner->title4}}</li>
        			</ul>
{{--        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>--}}
        		</div>
        	</div>
            @endforeach
        </div>
			</div>
		</section>
@endsection
