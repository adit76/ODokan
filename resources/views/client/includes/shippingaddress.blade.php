@extends('client.layouts.master')

@section('title')
Shipping Address
@endsection
<!-- NOT NAV -->
@section('content')
<main class="not-nav">



    @include('/client/includes/shippingaddress_inner');

    @include('/client/includes/footer');
  </main>
@endsection
