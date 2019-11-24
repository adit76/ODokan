@extends('client.layouts.master')

@section('title')
Cart
@endsection

@section('content')

<!-- NOT NAV -->
<main class="not-nav">


    @include ('client/includes/inner_checkout')

    @include ('client/includes/mobile_ad')

    @include ('client/includes/footer')


</main>

@endsection
