@extends('client.layouts.master')

@section('title')
  Search
@endsection

@section('content')


<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/search_inner_products_specific')

    @include('client/includes/footer')


</main>
@endsection
