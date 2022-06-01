@extends('welcome_home_layout')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/home/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h2 class="mb-0 bread">Booking</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-round-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
<link rel="stylesheet" href="booking.css">
<div class="wrap cf">
    <h1 class="projTitle">Responsive Table<span>-Less</span> Shopping Cart</h1>
    <div class="heading cf">
        <h1>My Cart</h1>
        <a href="#" class="continue">Continue Shopping</a>
    </div>
    <div class="cart">
        <ul class="cartWrap">
            @foreach($booking as $booking)
            <li class="items even">
                <div class="infoWrap">
                    <div class="cartSection">

{{--                        <img src="{{$booking->service->image}}" alt="" class="itemImg" />--}}
                        <p class="itemNumber">#QUE-007544-002</p>
                        <h3>{{$booking->service->name}}</h3>

                        <p> <a placeholder="3"/> {{$booking->date}} </p>

                        <p class="stockStatus">{{$booking->status_type}}</p>
                    </div>

                    <div class="prodTotal cartSection">
                        <p>{{$booking->service->price}} $
                        </p>
                    </div>
                    <div class="cartSection removeWrap">
                        <a href="#" class="remove">x</a>
                    </div>
                </div>
            </li>
                @endforeach
        </ul>
    </div>

    <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
        <a href="#" class="btn"></a></div>

    <div class="subtotal cf">
        <ul>
            <li class="totalRow"><span class="label">Subtotal</span><span class="value">$35.00</span></li>

            <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>

            <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
            <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
        </ul>
    </div>
</div>

<script>
    // Remove Items From Cart
    $('a.remove').click(function(){
        event.preventDefault();
        $( this ).parent().parent().parent().hide( 400 );

    })

    // Just for testing, show all items
    $('a.btn.continue').click(function(){
        $('li.items').show(400);
    })

</script>
@endsection
