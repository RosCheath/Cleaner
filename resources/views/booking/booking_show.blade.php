@extends('welcome_home_layout')
@section('content')
    @foreach($bookingimage as $bookingimage)
        <section class="hero-wrap hero-wrap-2" style="background-image: url({{$bookingimage->image}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h2 class="mb-0 bread">Booking</h2>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-round-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<div class="container">
    <div class="table-wrap">
        <table class="table table-responsive table-borderless">
            <thead>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>total</th>
            <th>&nbsp;</th>
            </thead>
            <tbody>
            <tr class="align-middle alert border-bottom" role="alert">
                <td>
                    <input type="checkbox" id="check">
                </td>
                <td class="text-center">
                    <img class="pic"
                         src="https://www.freepnglogos.com/uploads/shoes-png/dance-shoes-png-transparent-dance-shoes-images-5.png"
                         alt="">
                </td>
                <td>
                    <div>
                        <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                        <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                    </div>
                </td>
                <td>
                    <div class="fw-600">$44.99</div>
                </td>
                <td class="d-">
                    <input class="input" type="text" placeholder="2">
                </td>
                <td>
                    $89.98
                </td>
                <td>
                    <div class="btn" data-bs-dismiss="alert">
                        <span class="fas fa-times"></span>
                    </div>
                </td>
            </tr>
            <tr class="align-middle alert border-bottom" role="alert">
                <td>
                    <input type="checkbox" id="check">
                </td>
                <td class="text-center">
                    <img class="pic"
                         src="https://www.freepnglogos.com/uploads/shoes-png/download-vector-shoes-image-png-image-pngimg-2.png"
                         alt="">
                </td>
                <td>
                    <div>
                        <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                        <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                    </div>
                </td>
                <td>
                    <div class="fw-600">$54.99</div>
                </td>
                <td class="d-">
                    <input class="input" type="text" placeholder="2">
                </td>
                <td>
                    $108.98
                </td>
                <td>
                    <div class="btn" data-bs-dismiss="alert">
                        <span class="fas fa-times"></span>
                    </div>
                </td>
            </tr>
            <tr class="align-middle alert border-bottom" role="alert">
                <td>
                    <input type="checkbox" id="check">
                </td>
                <td class="text-center">
                    <img class="pic"
                         src="https://www.freepnglogos.com/uploads/shoes-png/running-shoes-png-transparent-running-shoes-images-6.png"
                         alt="">
                </td>
                <td>
                    <div>
                        <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                        <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                    </div>
                </td>
                <td>
                    <div class="fw-600">$50.99</div>
                </td>
                <td class="d-">
                    <input class="input" type="text" placeholder="2">
                </td>
                <td>
                    $100.98
                </td>
                <td>
                    <div class="btn" data-bs-dismiss="alert">
                        <span class="fas fa-times"></span>
                    </div>
                </td>
            </tr>
            <tr class="align-middle alert border-bottom" role="alert">
                <td>
                    <input type="checkbox" id="check">
                </td>
                <td class="text-center">
                    <img class="pic"
                         src="https://www.freepnglogos.com/uploads/shoes-png/find-your-perfect-running-shoes-26.png"
                         alt="">
                </td>
                <td>
                    <div>
                        <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                        <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                    </div>
                </td>
                <td>
                    <div class="fw-600">$74.99</div>
                </td>
                <td>
                    <input class="input" type="text" placeholder="2">
                </td>
                <td>
                    $148.98
                </td>
                <td>
                    <div class="btn" data-bs-dismiss="alert">
                        <span class="fas fa-times"></span>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<style>
    /*@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');*/
    /*.pic {*/
    /*    width: 50px;*/
    /*    height: 50px;*/
    /*    object-fit: contain;*/
    /*}*/



    .table thead th {
        padding: 30px;
        font-size: 14px;
        color: white;
    }

    .table tbody td input[type="checkbox"] {
        appearance: none;
        width: 20px;
        height: 20px;
        background-color: #eee;
        position: relative;
        border-radius: 3px;
        cursor: pointer;
    }

    .container .table-wrap {

        margin: 20px auto;
        overflow-x: auto
    }



    .container .table-wrap::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background-image: linear-gradient(to right, #5D7ECD, #0C91E6);
    }

    /*.table>:not(caption)>*>* {*/
    /*    padding: 2rem 0.5rem;*/
    /*}*/

    .input {
        width: 30px;
        height: 30px;
        /*color: black;*/
        font-weight: 600;
        outline: none;
        padding: 8px;
    }

    ::placeholder {
        /*color: black;*/
        font-weight: 600;
    }

    .table tbody td input[type="checkbox"]:after {
        position: absolute;
        width: 100%;
        height: 100%;
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
        content: "\f00c";
        color: #fff;
        font-size: 15px;
        display: none
    }

    .table tbody td input[type="checkbox"]:checked,
    .table tbody td input[type="checkbox"]:checked:hover {
        background-color: #21cf95;
    }

    .table tbody td input[type="checkbox"]:checked::after {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .table tbody td input[type="checkbox"]:hover {
        background-color: #ddd;
    }

    .table tbody td {
        padding: 30px;
        margin: 0;
        font-size: 14.5px;
        font-weight: 600;
    }

    .table tbody td .fa-times {
        color: #D32F2F;
    }


    .text-muted {
        font-size: 12.5px;
    }

    .table tbody tr td:nth-of-type(3) {
        min-width: 320px;
    }

    @media(min-width: 992px) {
        .container .table-wrap {
            overflow: hidden;
        }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
