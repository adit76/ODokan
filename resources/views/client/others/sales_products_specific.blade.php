@extends('client.layouts.master')

@section('title')
  Sales Product
@endsection

@section('content')


<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/sales_inner_products_specific')

    @include('client/includes/footer')


</main>
@endsection
