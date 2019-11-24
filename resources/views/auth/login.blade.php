@extends('client.layouts.master')

@section('title')
Login
@endsection
<!-- NOT NAV -->
@section('content')
<main class="not-nav">



    @include('/client/includes/inner_login');

    @include('/client/includes/footer');
  </main>
@endsection
