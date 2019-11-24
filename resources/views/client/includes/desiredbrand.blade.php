@extends('client.layouts.master')



@section('title')
Desired Brands
@endsection
<!-- NOT NAV -->

@section('content')
<main class="not-nav">


    @include ('client/includes/desiredbrand_inner_products')

    @include ('client/includes/mobile_ad')

    @include ('client/includes/footer')


</main>
@endsection
