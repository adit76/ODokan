@extends('admin.layouts.master')

@section('content')


                 <div class="col-md-7">

                         <div class="header">
                             <h4 class="title">Product Detail</h4>

                         </div>


                         @if(session('msg'))
                          <div class="alert alert-success">{{session('msg')}}</div>
                         @endif

                         @if(session('msg'))
                          <div class="alert alert-danger">{{session('message')}}</div>
                         @endif


                         <div class="content table-responsive table-full-width">

                             <table class="table table-striped table-bordered">
                                 <tbody>


                                     <tr>
                                         <th>ID</th>
                                         <td>{{$product_info->id}}</td>
                                     </tr>

                                     <tr>
                                         <th>Name</th>
                                         <td>{{$product_info->product->product_name}}</td>
                                     </tr>

                                     <tr>
                                         <th>Description</th>
                                         <td>{{$product_info->product->product_description}}</td>
                                     </tr>

                                     <tr>
                                         <th>Price</th>
                                         <td>Rs.{{$product_info->product_price}}</td>
                                     </tr>

                                     <tr>
                                         <th>Gender</th>
                                         <td>{{$product_info->product->category_gender}}</td>
                                     </tr>



                                     <tr>
                                         <th>Category</th>
                                         @foreach($product_categories as $product_category)
                                          @if($product_info->product->product_category_name==$product_category->id)
                                            <td>{{$product_category->category_name}}</td>
                                            @endif
                                           @endforeach
                                     </tr>

                                     <tr>
                                         <th>Color</th>

                                              <td><div style=" width:50px; height:30px; background-color:{{$product_info->product_color}};"></div></td>


                                     <tr>
                                         <th>Size:</th>
                                           @foreach($product_sizes as $product_size)
                                            @if($product_info->product_size==$product_size->id)
                                              <td>{{$product_size->size}}</td>
                                            @endif
                                           @endforeach
                                     </tr>




                                     <tr>
                                         <th>Created At</th>
                                         <td>{{$product_info->created_at->diffForHumans()}}</td>
                                     </tr>

                                     <tr>
                                         <th>Updated At</th>
                                         <td>{{$product_info->updated_at->diffForHumans()}}</td>
                                     </tr>

                                     <tr>
                                         <th>Image</th>
                                         <td><img src="{{url('products_images').'/'.$product_info->product_image}}" alt="{{$product_info->product_image}}" class="img-thumbnail" style="width: 150px;"></td>
                                     </tr>


                                      <tr>
                                          <th>Activity:</th>
                                          <div class="d-inline-flex">
                                          <td>

                                              <form action="{{route('products.destroy',['id'=>$product_info->id])}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
                                                  <span class="fas fa-trash" aria-hidden="true"></span>
                                                </button>
                                              </form>



                                            <a href="{{route('products.edit',['id'=>$product_info->id])}}" class="btn btn-outline-primary" onclick="return edit_item()">
                                              <span class="fas fa-edit" aria-hidden="true"></span>
                                            </a>

                                          </td>
                                        </div>
                                      </tr>

                                 </tbody>

                             </table>


                         </div>


                 </div>

@endsection
