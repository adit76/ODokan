@extends('client.layouts.master')

@section('title')
Sign up
@endsection
<!-- NOT NAV -->
@section('content')
<main class="not-nav">



    @include( '/client/includes/inner_signup')

    @include ('/client/includes/footer')


</main>
@endsection
