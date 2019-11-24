@extends('client.layouts.master')

@section('title')
  Mens Wear
@endsection

@section('content')


<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/mens_inner_products_specific',$category)

    @include('client/includes/footer')


</main>
@endsection
