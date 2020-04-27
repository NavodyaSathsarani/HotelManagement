@extends('layouts.master')

@section('title')
Laravel Shopping Cart
@endsection

@section('content')

@include('partials.ourJs')
@if(Session::has('success'))
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">
            {{Session::get('success')}}

        </div>

    </div>


</div>
@endif


@if(count($products)=="0")
<div class="col-xs-6 col-sm-4">
    <div class="itembox">
        <h2>No items found under this category</h2>
    </div>
</div>
@else
<div id="productData">
    @include('shop.productsPage')
</div>
@endif

@endsection