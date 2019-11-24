@extends('admin.layouts.master')

@section('link')
Main Banners
@endsection

@section('title')
  <h2 class="text-center">Main Banners</h2>
@endsection


@section('content')

                 <div class="col-lg-11 col-md-12">
                   <div class="card">



                     <div class="card-header">
                       <!-- <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;">Main Banners</h4> -->
                       <!-- <p class="card-category" style="font-size:15px; color:white; font-weight:bold;">List of main banners</p> -->
                       <a href="{{route('add-banners')}}" class="btn btn-primary btn-sm">Add Banner<div class="ripple-container"></div></a>

                     </div>
                     <div class="card-body table-responsive">
                       @if(session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                       @endif
                       <table class="table table-hover">
                         <thead class="text-warning">
                           <th style="font-size:18px; color:tomato;">Banner</th>
                           <th style="font-size:18px; color:tomato;">Activity</th>
                          
                         </thead>
                         <tbody>
                           @foreach($banners as $banner)
                         <tr>
                             <td>
                             <img style = "width:300px;" src="{{url('main_banner').'/'.$banner->banner_image}}" alt="{{$banner->banner_image}}">
                             </td>

                             <td>
                               <div class="d-inline-flex">
                               <form action="{{route('deletebanner',['id'=>$banner->id])}}" method="post">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}
                                 <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
                                   <span class="fa fa-trash" aria-hidden="true"></span>
                                 </button>
                               </form>
</td>

                            
                             @endforeach
                         </tbody>
                       </table>
                       {{$banners->links()}}

                     </div>
                   </div>
                 </div>

@endsection
