@extends('client.layouts.master')


@section('title')
  Individual product
@endsection





<!-- NOT NAV -->
@section('content')
<main class="not-nav">



    @include ('client/includes/product_details',$product_detail)



<br><br>

  



    @include ('client/includes/footer')




</main>
@endsection
