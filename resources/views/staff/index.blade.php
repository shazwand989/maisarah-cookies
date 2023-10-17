@extends('layouts.staff')

@section('content')
    <div class="row">
        {{-- Display error message if present --}}
        @if (session('error'))
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            </div>
        @endif

        {{-- customer --}}
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">New Customers</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">4565</h2>
                        <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>

        {{-- catalog --}}
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Catalog</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">123</h2>
                        <p class="text-white mb-0">Current Catalog Size</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                </div>
            </div>
        </div>

        {{-- product sold --}}
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-5">
                <div class="card-body">
                    <h3 class="card-title text-white">Products Sold</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">{{ rand(100, 1000) }}</h2>
                        <p class="text-white mb-0">Jan - {{ date('F Y') }} </p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                </div>
            </div>
        </div>

        {{-- net profit --}}
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-6">
                <div class="card-body">
                    <h3 class="card-title text-white">Net Profit</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">RM {{ rand(100, 1000) }}.{{ rand(10, 99) }}</h2>
                        <p class="text-white mb-0">Jan - {{ date('F Y') }} </p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>


    </div>
    <div class="row">
        {{-- pending order --}}
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-7">
                <div class="card-body">
                    <h3 class="card-title text-white">Pending Orders</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">45</h2>
                        <p class="text-white mb-0">Orders to be Processed</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-clock"></i></span>
                </div>
            </div>
        </div>
    </div>
@endsection
