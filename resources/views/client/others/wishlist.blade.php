@extends('client.layouts.master')

@section('title')
  Wishlist
@endsection

@section('content')


<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/wishlist_specific')

    @include('client/includes/footer')


</main>
@endsection
