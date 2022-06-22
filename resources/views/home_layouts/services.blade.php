@extends('welcome_home_layout')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/home/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-0 bread">Services</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-round-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="services-section ftco-section">
      <div class="container">
      	<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Services Menu</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

          <div class="row row-cols-1 row-cols-md-3">
              @foreach($service as $service)
                  <div class="col mb-4">
                      <div class="card h-100">
                          <img src="{{ url('storage/ServiceImage/'.$service->image)}}" class="card-img-top" alt="...">
                          <div class="card-body">
                              <h2 class="card-title">{{$service->name}}</h2>
                              <h5 class="card-title">${{$service->price}}</h5>
                              <p class="card-text">{{$service->title}}</p>
                          </div>
                          <div class="card-footer text-center">
                              <a href="service_id" class="btn btn-primary">Booking Now</a>
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
          	<span class="subheading">Pricing</span>
            <h2 class="mb-4">Our Prices</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Hair Style</h3>
	        			<p><span class="price">$50.00</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Hair Dryer</li>
								<li>Hair Coloring</li>
								<li>Hair Cut</li>
								<li>Hair Dresser</li>
								<li>Hair Spa</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Manicure Pedicure</h3>
	        			<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Manicure</li>
								<li>Pedicure</li>
								<li>Coloring</li>
								<li>Nails</li>
								<li>Nail Cut</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry active pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Makeup</h3>
	        			<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Makeup</li>
								<li>Professional Makeup</li>
								<li>Blush On</li>
								<li>Facial Massage</li>
								<li>Facial Spa</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="pricing-entry pb-5 text-center">
        			<div>
	        			<h3 class="mb-4">Body Treatment</h3>
	        			<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
	        		</div>
        			<ul>
        				<li>Massage</li>
								<li>Spa</li>
								<li>Foot Spa</li>
								<li>Body Spa</li>
								<li>Relaxing</li>
        			</ul>
        			<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        		</div>
        	</div>
        </div>
			</div>
		</section>
@endsection
