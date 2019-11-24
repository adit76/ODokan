@extends('admin.layouts.master')

@section('link')
  Add corresponding attributes
@endsection

@section('title')
  <h2 class="text-center">Add the new attributes</h2>
@endsection


@section('content')


  <div class="col-md-12">
  <div class="card">
  <div class="card-header card-header">
    <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;">Add the product attributes</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>

      <form class="form-group" action="{{url('/admin/products/add-attributes/'.$product->id)}}"  method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="col-md-12">


        <div class="row">

        <div class="col-md-8">

        <div class="row">

          <h2>Corresponding Product</h2>


              <table class="table table-striped table-bordered">
                  <tbody>


                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Code</th>
                          <td style="font-size:15px;">{{$product->product_code}}</td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Parent Brand</th>

                             <td style="font-size:15px;">{{$product->product_brand}}</td>

                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Name</th>

                             <td style="font-size:15px;">{{$product->product_name}}</td>

                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;"> Product Description</th>
                          <td style="font-size:15px;">{{$product->product_description}}</td>
                      </tr>


                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Gender</th>
                          <td style="font-size:15px;">{{$product->category_gender}}</td>
                      </tr>






                      <!-- <tr>
                          <th>Image</th>
                          <td><img src="{{url('products_images').'/'.$product->product_image}}" alt="{{$product->product_image}}" class="img-thumbnail" style="width: 250px; height:250px;"></td>
                      </tr> -->








                         </div>
                       </tr>

                  </tbody>

              </table>


                <div class="row" style="margin-top:20px;">
                  <h2 style="letter-spacing:-1px;">&nbsp&nbsp&nbsp&nbspProduct Image:</h2>&nbsp&nbsp&nbsp
                  @foreach($product_images as $products_img)
                   @if($product->id==$products_img->product_id)
                     <img src="{{url('products_images').'/'.$products_img->product_image}}" alt="{{$products_img->product_image}}" class="img-thumbnail" style="width: 150px; height:150px;">
                     @endif
                    @endforeach
                  </div>



                  <hr/>





      <!-- <div class="col-md-4">
        <div class="form-group">
          <label for="product_image">Product Image:</label>


      <script>
      $(function(){
        $( "#sortable" ).sortable({
          revert:true
        });

        $( "ul, li" ).disableSelection();


        function refreshChildren(){
          let allChildren = $( "#sortable" ).children();
          for(let i = 0 ; i < allChildren.length ; i++){
            $(allChildren[i]).droppable({
              drop:function(event,ui){
                //console.log(event);
                setTimeout(function(){
                  getImageOrder();
                }, 2000);
              }
            });
          }
        }


        let idList = [];

        function getImageOrder(){
          idList = [];
          let allChildren = $( "#sortable" ).children();
          for(let i = 0 ; i < allChildren.length ; i++){
            idList.push($(allChildren[i]).attr( "img-id" ));
          }
          console.log(idList);//[2,1,3]
          // $.ajax({
          //   url:'/changeImageIndex',
          //   method:'post',
          //   data:idlist,
          //   success:function(){
          //     return 'Image has been changed';
          //   }
          // });
        }

        refreshChildren();
        getImageOrder();
      });
      </script>




              <ul id="sortable">
                @foreach($product_images as $image)
                  <li class="ui_state_default_{{$image->id}}" img-id="{{$image->id}}"><img style="width:100px;" src="{{asset('products_images/'.$image->product_image)}}"></li>
                @endforeach
              </ul>






        </div>
      </div> -->
    </div>
  </div>
</div>



        <div class="form-group" style="margin-top:50px;">
          <label for="product_keywords" class="bmd-label-floating"><strong>Add the required attributes for corresponding product:</strong></label>
          <div class="field_wrapper" style="margin:5px;">
            <div>
              <input type="text" name="sku[]" placeholder="Product Tag(product_code-product_country-product_size-product_color)" id="sku" required="required" style="font-size:15px; color:black;"/>&nbsp


                <select name="country[]" required>
                  <option selected disabled hidden>Choose Country here</option>
                  <option value="UK">UK</option>
                  <option value="USA">USA</option>
                </select>



                <select name="size[]" required>
                  <option selected disabled hidden>Choose Size here</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                </select>


                  <input type="text" name="price[]" placeholder="Price" id="price" required="required" style="font-size:15px; color:black;"/>&nbsp
                  <label for="color"><strong>Color:</strong></label>
                  <input type="color" name="color[]" id="color" value="#000000" required="required"/>&nbsp
                  <input type="hidden" name="mixed_color[]" value="0">
                  <input type="checkbox" onclick="this.previousElementSibling.value=1-this.previousElementSibling.value">
                  <strong>&nbspMixed Color</strong>&nbsp
                  <input type="text" name="stock[]" placeholder="Stock" id="stock" required="required" style="font-size:15px; color:black;"/>


              <a href="javascript:void(0);" class="add_button" title="Add field"><button type="button" class="btn btn-success">Add field</button></a><br>
            </div>
          </div>
        </div>













      <button type="submit" class="btn btn-success pull-right btn-lg">Add attributes</button>
      <div class="clearfix"></div>


    </form>

  </div>


  <!--Displaying the detail of the product-->
                      <div class="card">



                        <div class="card-header">
                          <h4 class="card-title" style="color:white; font-weight:bold; font-size:20px;">Available Attributes</h4>
                          <p class="card-category" style="color:white; font-weight:bold; font-size:15px;">List of all available attributes</p>
                        </div>
                        <div class="card-body table-responsive">
                          <table class="table table-hover">
                            <thead class="text-warning">
                              <th style="font-size:18px; color:tomato;">Attribute ID</th>
                              <th style="font-size:18px; color:tomato;">Product Tag</th>
                              <th style="font-size:18px; color:tomato;">Product Country</th>
                              <th style="font-size:18px; color:tomato;">Product Size</th>
                              <th style="font-size:18px; color:tomato;">Product Price</th>
                              <th style="font-size:18px; color:tomato;">Product Color</th>
                              <th style="font-size:18px; color:tomato;">Product Stocks</th>
                              <th style="font-size:18px; color:tomato;">Activity</th>
                            </thead>
                            <tbody>
                              @foreach($product['product_info'] as $product_info)
                            <tr>
                                <td>{{$product_info->id}}</td>
                                <td>{{$product_info->product_sku}}</td>
                                <td>{{$product_info->product_country}}</td>
                                <td>{{$product_info->product_size}}</td>
                                <td>Rs.{{$product_info->product_price}}</td>
                                <td> <div style=" width:50px; height:20px; background-color:{{$product_info->product_color}};"></div></td>

                                <td>{{$product_info->product_stock}}</td>



                                <td>
                                  <div class="d-inline-flex">
                                  <form action="{{route('deleteattributes',['id'=>$product_info->id])}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
                                      <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                  </form>

                                  <a href="{{route('editattributes',['id1'=>$product->id,'id2'=>$product_info->id])}}" class="btn btn-outline-primary" onclick="return edit_item()">
                                    <span class="fa fa-edit" aria-hidden="true"></span>
                                  </a>


                                     </div>
                                   </div>
                                 </div>



                               </div>





                              </div>
                                </td>
                                @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>









  </div>






@endsection
