@extends('client.layouts.master')

@section('title')
  Odokan: Online Shopping for Mens,Womens,Interior,Design
@endsection

@section('content')





<!-- NOT NAV -->
<main class="not-nav">


  @include('client/includes/banner')

   {{--@include('client/includes/mobile_ad')--}}
  <br/><br/>




  @include('client/includes/sub_banner_right')

  @include('client/includes/flex_banner')

  @include('client/includes/sub_banner_left')

  @include('client/includes/arrivals')

  @include('client/includes/index_products')

  @include('client/includes/our_brands')


  @include('client/includes/testimonial')

  @include('client/includes/footer')


</main>


@endsection
