@extends('client.layouts.master')

@section('title')
Ladies Wear
@endsection
<!-- NOT NAV -->

@section('content')
<main class="not-nav">


    @include ('client/includes/ladies_inner_products')

    @include ('client/includes/mobile_ad')

    @include ('client/includes/footer')


</main>
@endsection
