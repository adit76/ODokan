@extends('client.layouts.master')


@section('title')
  {{$product_detail->interior_design_product_name}}
@endsection





<!-- NOT NAV -->
@section('content')
<main class="not-nav">



    @include ('client/includes/interior_design_product_details',$product_detail)



<br><br>

  



    @include ('client/includes/footer')




</main>
@endsection
