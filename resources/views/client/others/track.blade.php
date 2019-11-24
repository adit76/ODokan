@extends('client.layouts.master')

@section('title')
  Track Order
@endsection
<!-- NOT NAV -->

@section('content')
<main class="not-nav">

  <form action="" method="post">
    {{csrf_field()}}
  <div class="container jumbotron">
    <div class="col-xs-6 col-xs-offset-3 text-center">
      <h3>TRACK ORDER</h3>
      <div class="col-xs-12">
        <input class="col-xs-10 input-lg" name="user_track_status" style="box-shadow: none !important; border: 1px solid #DEDEDE; border-radius: 0;" type="text" placeholder="Track Code" value="{{request()->input('user_track_status')}}" required="required"></input>
      <div class="col-xs-2 input-lg btn btn-success" style="display: flex; justify-content: center; align-items: center; border-radius: 0;"><button type="submit" class="btn btn-success"><i class="fa fa-search"></i></div></button>
      </div>
    </div>
  </div>

</form>

  <div class="container table-responsive">
    <table class="table table-responsive">
      <thead class="bg-warning">
        <tr>
          <th>Order By:</th>
          <th>Date:</th>
          <th>Status:</th>
          <th>Total Quanity:</th>
          <th>Total Price:</th>
          <th>Delivery Boy:</th>

        </tr>
      </thead>

      <tbody class="bg-info">
        @if(isset($details))
        @foreach($details as $track)
        <tr>
          <?php
            $username= DB::table('users')->where('id',$track->user_id)->first();
           ?>
          <td>{{$username->name}}</td>
          <td>{{$track->updated_at}}</td>
          <td>{{$track->status}}</td>
          <?php
            $totalquantity=$track->price;
           ?>
          <td>{{$track->total_quantity}}</td>
          <td>Rs.{{$totalquantity}}</td>
          <td>{{$track->delivery_boy}}</td>

        </tr>
        @endforeach
        @elseif(isset($msg))

       <div class="alert alert-success">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           {{ $msg }}

       </div>

        @endif
      </tbody>
    </table>
  </div>

    @include('client.includes.footer')

</main>



@endsection('content')
