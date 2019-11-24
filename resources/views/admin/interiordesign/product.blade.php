@extends('admin.layouts.master')

@section('link')
Interior Design product
@endsection

@section('title')
  <h2 class="text-center">View all interior design products</h2>
@endsection


@section('content')

                 <div class="col-lg-11 col-md-12">
                   <div class="card">

                     @if(session('message'))
                      <div class="alert alert-danger">{{session('message')}}</div>
                     @endif

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

                          <th style="font-size:18px; color:tomato;">Product Image</th>
                           <th style="font-size:18px; color:tomato;">Product Code</th>
                           <th style="font-size:18px; color:tomato;">Product Brand</th>
                           <th style="font-size:18px; color:tomato;">Product Name</th>

                           <th style="font-size:18px; color:tomato;">Product Price</th>
                           <th style="font-size:18px; color:tomato;">Product Stock</th>
                           <th style="font-size:18px; color:tomato;">Activity</th>
                         </thead>
                         <tbody>
                           @foreach($products as $product)
                         <tr>
                             <td>{{$product->id}}</td>

                             <td>
                               @foreach($parentcategories as $category)
                               @if($category->id==$product->interior_design_parent_categoryid)
                                {{$category->interior_design_parent_category}}
                               @endif
                               @endforeach
                             </td>

                             <td>
                               @foreach($categories as $category)
                               @if($category->id==$product->interior_design_category_id)
                                {{$category->interior_design_category}}
                               @endif
                               @endforeach
                             </td>

                             <?php
                             $id= $product->id;
                              $images= DB::table('interior_design_image')->where('interior_design_product_id',$id)->first();
                              ?>
                             <td><img src="/interior_design_images/{{$images->interior_design_product_image}}" alt="{{$images->interior_design_product_image}}" class="img-thumbnail"
                                      style="width: 50px"></td>
                             <td>{{$product->interior_design_product_code}}</td>
                             <td>{{$product->brand->name}}</td>
                             <td>{{$product->interior_design_product_name}}</td>


                             <!-- <td> <div style=" width:50px; height:20px; background-color:{{$product->product_color}};"></div></td> -->


                             <td>Rs.{{$product->interior_design_product_price}}</td>
                              <td>{{$product->interior_design_product_stock}}</td>

                             <td>
                               <div class="d-inline-flex">
                               <form action="{{route('deleteinteriordesignproduct',['id'=>$product->id])}}" method="post">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}
                                 <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
                                   <span class="fa fa-trash" aria-hidden="true"></span>
                                 </button>
                               </form>



                             <a href="/admin/editinteriordesignproduct/{{$product->id}}" class="btn btn-outline-primary" onclick="return edit_item()">
                               <span class="fa fa-edit" aria-hidden="true"></span>
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
                                                @foreach($parentcategories as $category)
                                                @if($category->id==$product->interior_design_parent_categoryid)
                                                 {{$category->interior_design_parent_category}}
                                                @endif
                                                @endforeach
                                              </td>
                                            </tr>



                                            <tr>
                                                <th>Category</th>
                                                <td>
                                                @foreach($categories as $category)
                                                @if($category->id==$product->interior_design_category_id)
                                                 {{$category->interior_design_category}}
                                                @endif
                                                @endforeach
                                              </td>
                                            </tr>

                                            <tr>
                                                <th>Product Brand</th>
                                                <td>{{$product->interior_design_product_brand}}</td>
                                            </tr>

                                            <tr>
                                                <th>Product Code</th>
                                                <td>{{$product->interior_design_product_code}}</td>
                                            </tr>

                                            <tr>
                                                <th> Product Name</th>
                                                <td>{{$product->interior_design_product_name}}</td>
                                            </tr>

                                            <tr>
                                                <th> Product Description</th>
                                                <td>{{$product->interior_design_product_description}}</td>
                                            </tr>





                                            <tr>
                                                <th>Product Image</th>
                                                <?php
                                                $id= $product->id;
                                                 $images= DB::table('interior_design_image')->where('interior_design_product_id',$id)->get();
                                                 ?>
                                                @foreach($images as $img)
                                                 @if($product->id==$img->interior_design_product_id)
                                                   <td><img src="{{url('interior_design_images').'/'.$img->interior_design_product_image}}" alt="{{$img->interior_design_product_image}}" class="img-thumbnail" style="width: 150px; height:150px;"></td>
                                                   @endif
                                                  @endforeach
                                            </tr>


                                            <!-- <tr>
                                                <th>Image</th>
                                                <td><img src="{{url('products_images').'/'.$product->product_image}}" alt="{{$product->product_image}}" class="img-thumbnail" style="width: 250px; height:250px;"></td>
                                            </tr> -->

                                            <tr>
                                                <th>Product Price</th>
                                                <td>{{$product->interior_design_product_price}}</td>
                                            </tr>

                                            <tr>
                                                <th>Product Stocks</th>
                                                <td>{{$product->interior_design_product_stock}}</td>
                                            </tr>


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
