@extends('client.layouts.master')

@section('title')
  Checkout
@endsection

@section('content')
<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/inner_checkout_next')

    @include('client/includes/footer')


</main>
@endsection
