@extends('admin.layouts.master')

@section('link')
Track the order
@endsection

@section('title')
  <h2 class="text-center">View all user's order</h2>
@endsection


@section('content')

                 <div class="col-lg-11 col-md-12">
                   <div class="card">



                     <div class="card-header">
                       <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;">ALL Orders</h4>
                       <p class="card-category" style="font-size:15px; color:white; font-weight:bold;">List of all user's order</p>
                     </div>
                     <div class="card-body table-responsive">
                       @if(session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                       @endif
                       <table class="table table-hover">
                         <thead class="text-warning">
                           <th style="font-size:18px; color:tomato;">ID</th>


                           <th style="font-size:18px; color:tomato;">Track Code</th>
                           <th style="font-size:18px; color:tomato;">User ID</th>
                           <!-- <th>Image</th> -->
                           <th style="font-size:18px; color:tomato;">User Name</th>
                           <th style="font-size:18px; color:tomato;">Quantity</th>
                           <th style="font-size:18px; color:tomato;">Price</th>
                           <th style="font-size:18px; color:tomato;">Status</th>
                           <th style="font-size:18px; color:tomato;">Delivery Boy</th>

                           <th style="font-size:18px; color:tomato;">Activity</th>
                         </thead>
                         <tbody>

                          <?php
                            $track_orders = DB::table('track_orders')->orderBy('id','desc')->paginate(10);
                           ?>

                           @foreach($track_orders as $track_order)

                         <tr>

                             <td>{{$track_order->id}}</td>
                             <td>{{$track_order->tracking_code}}</td>
                             <td>{{$track_order->user_id}}</td>

                             <?php
                                $name=DB::table('users')->where('id',$track_order->user_id)->first();
                              ?>
                             <td>{{$name->name}}</td>
                             <td>{{$track_order->total_quantity}}</td>


                             <td>{{$track_order->price}}</td>
                             <td>{{$track_order->status}}</td>
                             <td>{{$track_order->delivery_boy}}</td>



                             <td>
                               <div class="d-inline-flex">
                           


                             <a href="{{route('editthetrack',['id'=>$track_order->tracking_code,'id1'=>$track_order->user_id])}}" class="btn btn-outline-primary" onclick="return edit_item()">
                               <span class="fa fa-edit" aria-hidden="true"></span>
                             </a>



                            </div>






                             </td>
                           </tr>
                           @endforeach


                         </tbody>
                         
                         
                       </table>
                       </div>

                       <div class="pull-right" style="font-size:20px; font-weight:bold; letter-spacing:10px;">{{$track_orders->links()}}</div>
                     </div>
                   </div>
                 </div>

@endsection
