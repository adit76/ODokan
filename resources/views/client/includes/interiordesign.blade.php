@extends('client.layouts.master')

@section('title')
Interior Design
@endsection
<!-- NOT NAV -->

@section('content')
<main class="not-nav">


    @include ('client/includes/interiordesign_inner_products')

    @include ('client/includes/mobile_ad')

    @include ('client/includes/footer')


</main>
@endsection
