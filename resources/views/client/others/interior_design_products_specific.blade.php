@extends('client.layouts.master')

@section('title')
  {{$category->interior_design_category}}
@endsection

@section('content')


<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/interior_design_inner_products_specific')

    @include('client/includes/footer')


</main>
@endsection
