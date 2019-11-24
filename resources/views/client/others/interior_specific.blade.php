@extends('client.layouts.master')

@section('title')
  Interior Design/{{$category->interior_design_parent_category}}
@endsection

@section('content')


<!-- NOT NAV -->
<main class="not-nav">


    @include('client/includes/interior_specific_inner')

    @include('client/includes/footer')


</main>
@endsection
