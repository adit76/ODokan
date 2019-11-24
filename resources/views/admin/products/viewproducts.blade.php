@extends('admin.layouts.master')

@section('link')
View Products
@endsection

@section('title')
  <h2 class="text-center">View all products</h2>
@endsection


@section('content')

                 <div class="col-lg-11 col-md-12">
                   <div class="card">



                     <div class="card-header">
                       <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;">ALL PRODUCTS</h4>
                       <p class="card-category" style="font-size:15px; color:white; font-weight:bold;">List of all stocks</p>
                     </div>
                     <div class="card-body table-responsive">
                       @if(session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                       @endif
                       <table class="table table-hover">
                         <thead class="text-warning">
                           <th style="font-size:18px; color:tomato;">ID</th>
                           <th style="font-size:18px; color:tomato;">Parent Category Name</th>
                           <th style="font-size:18px; color:tomato;">Category Name</th>
                           <!-- <th>Image</th> -->
                           <th style="font-size:18px; color:tomato;">Product Code</th>
                           <th style="font-size:18px; color:tomato;">Product Brand</th>
                           <th style="font-size:18px; color:tomato;">Product Name</th>
                           <th style="font-size:18px; color:tomato;">Gender</th>
                           <th style="font-size:18px; color:tomato;">Discount percentage</th>
                           <th style="font-size:18px; color:tomato;">Activity</th>
                         </thead>
                         <tbody>
                           @foreach($products as $product)
                         <tr>
                             <td>{{$product->id}}</td>
                             <td>
                               @foreach($parent_categories as $parents_category)
                               @if($parents_category->id==$product->parentcategory_id)
                                {{$parents_category->parent_category}}
                               @endif
                               @endforeach
                             </td>

                             <td>
                               @foreach($product_categories as $products_category)
                               @if($products_category->id==$product->category_id)
                                {{$products_category->child_category}}
                               @endif
                               @endforeach
                             </td>
                             <!-- <td><img src="/products_images/{{$product->product_image}}" alt="{{$product->product_image}}" class="img-thumbnail"
                                      style="width: 50px"></td> -->
                             <td>{{$product->product_code}}</td>
                             <td>{{$product->brand->name}}</td>
                             <td>{{$product->product_name}}</td>

                             <td>{{$product->category_gender}}</td>
                             <!-- <td> <div style=" width:50px; height:20px; background-color:{{$product->product_color}};"></div></td> -->


                             <td>{{$product->discount_percentage}}%</td>

                             <td>
                               <div class="d-inline-flex">
                               <form action="{{route('products.destroy',['id'=>$product->id])}}" method="post">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}
                                 <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
                                   <span class="fa fa-trash" aria-hidden="true"></span>
                                 </button>
                               </form>



                             <a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-outline-primary" onclick="return edit_item()">
                               <span class="fa fa-edit" aria-hidden="true"></span>
                             </a>

                             <a href="{{url('/admin/products/add-attributes/'.$product->id)}}" class="btn btn-outline-primary">
                               <span class="fa fa-plus" aria-hidden="true"></span>
                             </a>




                             <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#products_model_{{$product->id}}">
                                  <span class="fa fa-info" aria-hidden="true"></span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="products_model_{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Product Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                    <table class="table table-striped table-bordered">
                                        <tbody>


                                            <tr>
                                                <th>ID</th>
                                                <td>{{$product->id}}</td>
                                            </tr>

                                            <tr>
                                                <th>Parent Category</th>
                                                <td>
                                                  @foreach($parent_categories as $parents_category)
                                                  @if($parents_category->id==$product->parentcategory_id)
                                                   {{$parents_category->parent_category}}
                                                  @endif
                                                  @endforeach
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Category</th>
                                                <td>
                                                @foreach($product_categories as $products_category)
                                                @if($products_category->id==$product->category_id)
                                                 {{$products_category->child_category}}
                                                @endif
                                                @endforeach
                                              </td>
                                            </tr>

                                            <tr>
                                                <th>Product Brand</th>
                                                <td>{{$product->product_brand}}</td>
                                            </tr>

                                            <tr>
                                                <th>Product Code</th>
                                                <td>{{$product->product_code}}</td>
                                            </tr>

                                            <tr>
                                                <th> Product Name</th>
                                                <td>{{$product->product_name}}</td>
                                            </tr>

                                            <tr>
                                                <th> Product Description</th>
                                                <td>{{$product->product_description}}</td>
                                            </tr>


                                            <tr>
                                                <th>Gender</th>
                                                <td>{{$product->category_gender}}</td>
                                            </tr>



                                            <tr>
                                                <th>Product Image</th>
                                                @foreach($product_images as $products_img)
                                                 @if($product->id==$products_img->product_id)
                                                   <td><img src="{{url('products_images').'/'.$products_img->product_image}}" alt="{{$products_img->product_image}}" class="img-thumbnail" style="width: 150px; height:150px;"></td>
                                                   @endif
                                                  @endforeach
                                            </tr>


                                            <!-- <tr>
                                                <th>Image</th>
                                                <td><img src="{{url('products_images').'/'.$product->product_image}}" alt="{{$product->product_image}}" class="img-thumbnail" style="width: 250px; height:250px;"></td>
                                            </tr> -->




                                            <tr>
                                                <th>Created At</th>
                                                <td>{{$product->created_at->diffForHumans()}}</td>
                                            </tr>

                                            <tr>
                                                <th>Updated At</th>
                                                <td>{{$product->updated_at->diffForHumans()}}</td>
                                            </tr>




                                               </div>
                                             </tr>

                                        </tbody>

                                    </table>




                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                  </div>
                                </div>
                              </div>



                            </div>





                           </div>
                             </td>
                             @endforeach

                         </tbody>
                       </table>

                       <div class="pull-right">{{$products->render("pagination::bootstrap-4")}}</div>
                     </div>
                   </div>
                 </div>

@endsection
