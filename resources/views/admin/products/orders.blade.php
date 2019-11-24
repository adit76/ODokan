@extends('admin.layouts.master')

@section('link')
 User Orders
@endsection

@section('title')
  <h2 class="text-center">View all orders</h2>
@endsection

  <?php
    $orders= DB::table('cart')->orderBy('id','desc')->paginate(10);

   ?>

@section('content')

                 <div class="col-lg-11 col-md-12">
                   <div class="card">



                     <div class="card-header">
                       <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;">ALL ORDERS</h4>
                       <p class="card-category" style="font-size:15px; color:white; font-weight:bold;">List of all orders</p>
                     </div>
                     <div class="card-body table-responsive">
                       @if(session('msg'))
                        <div class="alert alert-danger">{{session('msg')}}</div>
                       @endif
                       <table class="table table-hover">
                         <thead class="text-warning">

                            <th style="font-size:18px; color:tomato;">Order ID</th>
                           <th style="font-size:18px; color:tomato;">User ID</th>
                           <th style="font-size:18px; color:tomato;">User Name</th>
                           <th style="font-size:18px; color:tomato;">Track code</th>


                           <th style="font-size:18px; color:tomato;">Shipping Address</th>





                           <th style="font-size:18px; color:tomato;">Gender</th>

                           <th style="font-size:18px; color:tomato;">Status</th>

                           <th style="font-size:18px; color:tomato;">Activity</th>

                         </thead>
                         <tbody>
                           @foreach($orders as $order)
                         <tr>

                             <td>{{$order->id}}</td>
                             <td>{{$order->user_id}}</td>

                             <td>
                               <?php
                                  $userid= $order->user_id;
                                  $user_informations = DB::table('users')->where('id',$userid)->first();
                                ?>

                              {{$user_informations->name}}
                             </td>


                              <td>{{$order->track_code}}</td>

                             <td>
                               <?php
                                 $shipping_address_count= DB::table('shipping_address')->where('track_code',$order->track_code)->where('user_id',$order->user_id)->count();
                                $shipping_address= DB::table('shipping_address')->where('track_code',$order->track_code)->where('user_id',$order->user_id)->first();
                                ?>
                                <?php
                                  if($shipping_address_count==0){
                                    echo 'NULL';
                                    ?>

                                  <?php
                                }
                                else{
                                 ?>
                                {{$shipping_address->tolename}},{{$shipping_address->placename}}
                              <?php
                            }
                              ?>
                             </td>






                             <td>

                               {{$user_informations->gender}}


                             </td>




                            <td style="font-size:20px;">
                              @if($order->cart_status==0)

                              <span class="badge badge-warning">Pending</span>

                            @else($order->cart_status==1)

                            <span class="badge badge-success">Confirm</span>

                               @endif
                          </td>





                             <td>
                               <div class="d-inline-flex">
                               <form action="{{route('deletetheorder',['id'=>$order->id])}}" method="post">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}
                                 <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
                                   <span class="fa fa-trash" aria-hidden="true"></span>
                                 </button>
                               </form>



                               <a href="{{route('individualuserorder',['id'=>$order->user_id,'id1'=>$order->track_code])}}" class="btn btn-outline-primary">
                                 <span class="fa fa-info" aria-hidden="true"></span>
                               </a>










                            </div>





                           </div>
                             </td>
                             @endforeach

                         </tbody>
                       </table>

                       <div class="pull-right">{{$orders->render("pagination::bootstrap-4")}}</div>
                     </div>
                   </div>
                 </div>

@endsection
