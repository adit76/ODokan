@extends('client.layouts.master')

@section('title')
  Ladies Wear
@endsection

@section('content')


<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/ladies_inner_products_specific',$category)

    @include('client/includes/footer')


</main>
@endsection
